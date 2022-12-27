<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function render()
    {
        if (isset($search)) {
            $product = Product::with(['order_details'])->where('name', 'LIKE', '%' . $this->search . '%')->get();
        } else {
            $product = Product::with(['order_details'])->paginate(8);
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
        // dd($order);
        // if (isset($request)) {
            $user = Customer::where('name', 'LIKE', '%' . $this->search . '%')->get();
        // } else {
            // $user = Customer::with(['orders', 'customer_orders'])->where('level', 3)->get();
        // }

        if (isset($this->user)) {
            $user = Customer::where('name', 'LIKE', '%' . $this->user . '%')->get();
        } else {
            $user = Customer::latest()->get();
        }

        return view('livewire.admin.order.index', [
            "products" => $product,
            "total_cart" => $total_cart,
            "total_order" => $total_order,
            "order" => $order,
            "users" => $user
        ]);
    }
}
