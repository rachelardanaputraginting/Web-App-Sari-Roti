<?php

namespace App\Http\Livewire\Admin\History;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search;
    protected $queryString = ['search' => ['except' => '']];

    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if (Auth::user()->level === 1) {
            if ($this->search) {
                $order = DB::table('orders')
                    ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.product_id')
                    ->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'orders.status', 'products.name AS product_name')
                    ->where('customers.name', 'like', '%' . $this->search . '%')
                    ->where('orders.status', 1)
                    ->paginate(8);
            } else {
                $order = DB::table('orders')
                    ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.product_id')
                    ->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'orders.status', 'products.name AS product_name')
                    ->where('orders.status', 1)
                    ->paginate(8);
            }
        } else {
            if (isset($this->search)) {
                $order = DB::table('orders')
                    ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.product_id')
                    ->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'orders.status', 'products.name AS product_name')
                    ->where('customers.name', 'like', '%' . $this->search . '%')
                    ->where('orders.status', 1)
                    ->where('orders.user_id', Auth::user()->id)
                    ->paginate(8);
            } else {
                $order = DB::table('orders')
                    ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.product_id')
                    ->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'orders.status', 'products.name AS product_name')
                    ->where('orders.status', 1)
                    ->where('orders.user_id', Auth::user()->id)
                    ->paginate(8);
            }
        }

        return view('livewire.admin.history.index', [
            "orders" => $order
        ]);
    }
}
