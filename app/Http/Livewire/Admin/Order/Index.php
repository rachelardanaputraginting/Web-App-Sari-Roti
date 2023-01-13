<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Request;

class Index extends Component
{
    public $search;

    public function render()
    {
        if ($this->search) {
            $product = Product::where('name', 'like', '%' . $this->search . '%')
                ->latest()->paginate(8);
        } else {
            $product = Product::paginate(8);
        }

        $order = Order::where('status', 0)
            ->where('user_id', Auth::user()->id)
            ->first();

        if (!empty($order)) {
            $total_cart = OrderDetail::with(['order', 'product'])->where('order_id', $order->id)->count();
        } else {
            $total_cart = null;
        }

        $total_order = Order::where('status', 1)
            ->where('user_id', Auth::user()->id)
            ->count();

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (isset($this->user)) {
            $user = Customer::where('name', 'LIKE', '%' . $this->user . '%')->get();
        } else {
            $user = Customer::latest()->get();
        }

        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (!empty($order)) {
            $order_details = OrderDetail::with(['order', 'product'])->where('order_id', $order->id)->get();
        } else {
            $order_details = OrderDetail::all();
        }

        $customers = Customer::latest()->get();

        return view('livewire.admin.order.index', [
            "products" => $product,
            "total_cart" => $total_cart,
            "total_order" => $total_order,
            "order" => $order,
            "order_details" => $order_details,
            "customers" => $customers,
        ]);
    }

    public function delete($id)
    {
        $orderDetail = OrderDetail::where('product_id', $id)->first();
        $checkOrder = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (!empty($checkOrder)) {
            $dataOrder['user_id'] = Auth::user()->id;
            $dataOrder['customer_id'] = 0;
            $dataOrder['order_date'] = now();
            $dataOrder['status'] = 0;
            $dataOrder['total_order_price'] = $checkOrder->total_order_price - $orderDetail->total_price;
            Order::where('id', $checkOrder->id)->update($dataOrder);
        }

        OrderDetail::where('product_id', $id)->delete();

        return redirect()->back();
    }
}
