<?php

namespace App\Http\Livewire\Admin\Report;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $request;

    public function render()
    {
        if (Auth::user()->level === 1) {
            if (isset($this->request->report)) {
                if ($this->request->report === "year") {
                    $order = DB::table('order_details')
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.id')
                    ->whereYear('orders.order_date', date('Y'))
                    ->where('orders.status', 1)
                    ->get();
                    $title = "Tahunan";
                }elseif($this->request->report === "month"){
                    $title = "Bulanan";
                    $order = DB::table("order_details")
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->get();
                }elseif ($this->request->report === "week") {
                    if (isset($this->request->for)) {
                        if ($this->request->for == 1) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-1";
                        }elseif ($this->request->for == 2) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-2";
                        }elseif ($this->request->for == 3) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-3";
                        }elseif ($this->request->for == 4) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-4";
                        }
                    }
                }elseif($this->request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("order_details")
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->get();
                }
            }else {
                $order = "";
                $title = " ";
            }
        }elseif (Auth::user()->level === 2) {
            if (isset($this->request->report)) {
                if ($this->request->report === "year") {
                    $order = DB::table('order_details')
                    ->with(['product', 'user'])
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.id')
                    ->whereYear('orders.order_date', date('Y'))
                    ->where('orders.status', 1)
                    ->where('orders.user_id', Auth::user()->id)
                    ->get();
                    $title = "Tahunan";
                }elseif($this->request->report === "month"){
                    $title = "Bulanan";
                    $order = DB::table("order_details")
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->get();
                }elseif ($this->request->report === "week") {
                    if (isset($this->request->for)) {
                        if ($this->request->for == 1) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                                ->where('orders.user_id', Auth::user()->id)
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-1";
                        }elseif ($this->request->for == 2) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                                ->where('orders.user_id', Auth::user()->id)
                                ->where('orders.status', '=', 1)
                                ->get();
                            $title = "Minggu Ke-2";
                        }elseif ($this->request->for == 3) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                                ->where('orders.user_id', Auth::user()->id)
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-3";
                        }elseif ($this->request->for == 4) {
                            $order = DB::table('order_details')
                            ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                                ->where('orders.user_id', Auth::user()->id)
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-4";
                        }
                    }
                }elseif($this->request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("order_details")
                    ->select('orders.customer_name', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.user_id', Auth::user()->id)
                        ->where('orders.status', 1)
                        ->get();
                }
            }else {
                $order = "";
                $title = "";
            }
        }
        return view('livewire.admin.report.index', [
            "orders" => $order,
            "title" => $title
        ]);
    }
}
