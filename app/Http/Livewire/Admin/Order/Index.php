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
    public $customer_id;
    public $customer_name;
    public function render()
    {
        if ($this->customer_name) {
            $customers = Customer::where('name', 'like', '%' . $this->customer_name . '%')
                ->latest()->paginate(8);
        } else {
            $customers = Customer::latest()->get();
        }

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
        if (!empty($order)) {
            $order_details = OrderDetail::with(['order', 'product'])->where('order_id', $order->id)->get();
        } else {
            $order_details = OrderDetail::all();
        }

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


    public function store()
    {
        dd($this->customer_id);
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $dataOrder['customer_id'] = $this->customer_id;
        $dataOrder['status'] = 1;
        Order::where('id', $order->id)->update($dataOrder);

        $customerOrder = CustomerOrder::with(['order', 'user'])->where('user_id', Auth::user()->id)->where('status', 0)->first();
        $dataCustomerOrder['customer_id'] = $this->customer_id;
        $dataCustomerOrder['status'] = 1;
        CustomerOrder::where('id', $customerOrder->id)->update($dataCustomerOrder);

        $detailOrders = OrderDetail::where('order_id', $order->id)->get();
        foreach ($detailOrders as $detailOrder) {
            $product = Product::with(['order_details'])->where('id', $detailOrder->product_id)->first();
            $dataProduct['stok'] = $product->stok - $detailOrder->order_quantity;
            Product::where('id', $product->id)->update($dataProduct);
        }

        $order_price = CustomerOrder::with(['order', 'user'])->where('customer_id', 1)->where('status', 1)->sum('price');
        // dd($order_price);
        // dd($order_price->total_order_price);

        if ($order_price >= 200000) {
            $dataLevelCokelat['member'] = 3;
            Customer::where('id', $this->customer_id)->update($dataLevelCokelat);
        } elseif ($order_price >= 100000 && $order_price < 200000) {
            $dataLevelAnggur['member'] = 2;
            Customer::where('id', $this->customer_id)->update($dataLevelAnggur);
        } elseif ($order_price < 100000) {
            $dataLevelPandan['member'] = 1;
            Customer::where('id', $this->customer_id)->update($dataLevelPandan);
        }


        return redirect('/admin/history');
    }
}
