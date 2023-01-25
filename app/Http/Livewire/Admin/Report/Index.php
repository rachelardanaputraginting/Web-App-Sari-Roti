<?php

namespace App\Http\Livewire\Admin\Report;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $report, $for;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (Auth::user()->level === 1) {
            if ($this->report) {
                if ($this->report === "year") {
                    $order = DB::table('order_details')
                        ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereYear('orders.order_date', date('Y'))
                        ->where('orders.status', 1)
                        ->get();
                    $title = "Tahunan";
                } elseif ($this->report === "month") {
                    $title = "Bulanan";
                    $order = DB::table("order_details")
                        ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->get();
                } elseif ($this->report === "week") {
                    if ($this->for) {
                        if ($this->for == 1) {
                            $order = DB::table('order_details')
                                ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-1";
                        } elseif ($this->for == 2) {
                            $order = DB::table('order_details')
                                ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-2";
                        } elseif ($this->for == 3) {
                            $order = DB::table('order_details')
                                ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-3";
                        } elseif ($this->for == 4) {
                            $order = DB::table('order_details')
                                ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                                ->join('orders', 'order_details.order_id', '=', 'orders.id')
                                ->join('users', 'users.id', '=', 'orders.user_id')
                                ->join('products', 'products.id', '=', 'order_details.id')
                                ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                                ->where('orders.status', 1)
                                ->get();
                            $title = "Minggu Ke-4";
                        }
                    }
                } elseif ($this->report === "day") {
                    $title = "Harian";
                    $order = DB::table("order_details")
                        ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                        ->join('orders', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.id')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->get();
                }
            } else {
                $order = "";
                $title = " ";
            }
        } elseif (Auth::user()->level === 2) {
            if ($this->report === "year") {
                $order = DB::table('orders')
                    // ->select('customers.name AS customer', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                    // ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                    // ->join('users', 'users.id', '=', 'orders.user_id')
                    // ->join('products', 'products.id', '=', 'order_details.id')
                    // ->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->whereYear('orders.order_date', date('Y'))
                    ->where('orders.status', 1)
                    ->where('orders.user_id', Auth::user()->id)
                    ->get();
                $title = "Tahunan";
            } elseif ($this->report === "month") {
                $title = "Bulanan";
                $order = DB::table("order_details")
                    ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.id')
                    ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                    ->where('orders.status', 1)
                    ->where('orders.user_id', Auth::user()->id)
                    ->get();
            } elseif ($this->report === "week") {
                if ($this->for) {
                    if ($this->for == 1) {
                        $order = DB::table('order_details')
                            ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                            ->join('orders', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.id')
                            ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                            ->where('orders.user_id', Auth::user()->id)
                            ->where('orders.status', 1)
                            ->get();
                        $title = "Minggu Ke-1";
                    } elseif ($this->for == 2) {
                        $order = DB::table('order_details')
                            ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                            ->join('orders', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.id')
                            ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                            ->where('orders.user_id', Auth::user()->id)
                            ->where('orders.status', '=', 1)
                            ->get();
                        $title = "Minggu Ke-2";
                    } elseif ($this->for == 3) {
                        $order = DB::table('order_details')
                            ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                            ->join('orders', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.id')
                            ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                            ->where('orders.user_id', Auth::user()->id)
                            ->where('orders.status', 1)
                            ->get();
                        $title = "Minggu Ke-3";
                    } elseif ($this->for == 4) {
                        $order = DB::table('order_details')
                            ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
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
            } elseif ($this->report === "day") {
                $title = "Harian";
                $order = DB::table("order_details")
                    ->select('orders.customer_id', 'users.name AS nama', 'order_details.order_quantity', 'order_details.total_price', 'orders.order_date', 'products.name AS product_name')
                    ->join('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->join('products', 'products.id', '=', 'order_details.id')
                    ->whereDay('orders.order_date', today())
                    ->where('orders.user_id', Auth::user()->id)
                    ->where('orders.status', 1)
                    ->get();
            } else {
                $order = null;
                $title = null;
            }
        }
        return view('livewire.admin.report.index', [
            "orders" => $order,
            "title" => $title
        ]);
    }
}
