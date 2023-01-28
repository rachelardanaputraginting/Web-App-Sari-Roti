<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminReportController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->level === 1) {
            if (isset($request->report)) {
                if ($request->report === "year") {
                    $order = DB::table('orders')
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereYear('orders.order_date', date('Y'))
                        ->where('orders.status', 1)
                        ->paginate(8);
                    $title = "Tahunan";
                } elseif ($request->report === "month") {
                    $title = "Bulanan";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->paginate(8);
                } elseif ($request->report === "week") {
                    if ($request->for == 1) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                            ->where('orders.status', 1)
                            ->paginate(8);
                        $title = "Minggu Ke-1";
                    } elseif ($request->for == 2) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                            ->where('orders.status', 1)
                            ->paginate(8);
                        $title = "Minggu Ke-2";
                    } elseif ($request->for == 3) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                            ->where('orders.status', 1)
                            ->paginate(8);
                        $title = "Minggu Ke-3";
                    } elseif ($request->for == 4) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                            ->where('orders.status', 1)
                            ->paginate(8);
                        $title = "Minggu Ke-4";
                    }
                } elseif ($request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                } else {
                    $order = null;
                    $title = null;
                }
            } else {
                $order = null;
                $title = null;
            }
        } elseif (Auth::user()->level === 2) {
            if (isset($request->report)) {
                if ($request->report === "year") {
                    $order = DB::table('orders')
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereYear('orders.order_date', date('Y'))
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                    $title = "Tahunan";
                } elseif ($request->report === "month") {
                    $title = "Bulanan";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                } elseif ($request->report === "week") {
                    if ($request->for == 1) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-1";
                    } elseif ($request->for == 2) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-2";
                    } elseif ($request->for == 3) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-3";
                    } elseif ($request->for == 4) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-4";
                    }
                } elseif ($request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                } else {
                    $order = null;
                    $title = null;
                }
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

    public function print(Request $request)
    {
        if (Auth::user()->level === 1) {
            if (isset($request->report)) {
                if ($request->report === "year") {
                    $order = DB::table('orders')
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereYear('orders.order_date', date('Y'))
                        ->where('orders.status', 1)
                        ->latest()->get();
                    $title = "Tahunan";
                } elseif ($request->report === "month") {
                    $title = "Bulanan";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->latest()->get();
                } elseif ($request->report === "week") {
                    if ($request->for == 1) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                            ->where('orders.status', 1)
                            ->latest()->get();
                        $title = "Minggu Ke-1";
                    } elseif ($request->for == 2) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                            ->where('orders.status', 1)
                            ->latest()->get();
                        $title = "Minggu Ke-2";
                    } elseif ($request->for == 3) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                            ->where('orders.status', 1)
                            ->latest()->get();
                        $title = "Minggu Ke-3";
                    } elseif ($request->for == 4) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                            ->where('orders.status', 1)
                            ->latest()->get();
                        $title = "Minggu Ke-4";
                    }
                } elseif ($request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->latest()->get();
                } else {
                    $order = null;
                    $title = null;
                }
            } else {
                $order = null;
                $title = null;
            }
        } elseif (Auth::user()->level === 2) {
            if (isset($request->report)) {
                if ($request->report === "year") {
                    $order = DB::table('orders')
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereYear('orders.order_date', date('Y'))
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                    $title = "Tahunan";
                } elseif ($request->report === "month") {
                    $title = "Bulanan";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                } elseif ($request->report === "week") {
                    if ($request->for == 1) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [date('d'), now()->addDays(7)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-1";
                    } elseif ($request->for == 2) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(7), now()->addDays(14)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-2";
                    } elseif ($request->for == 3) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(14), now()->addDays(21)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-3";
                    } elseif ($request->for == 4) {
                        $order = DB::table('orders')
                            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                            ->join('users', 'users.id', '=', 'orders.user_id')
                            ->join('products', 'products.id', '=', 'order_details.product_id')
                            ->join('customers', 'customers.id', '=', 'orders.customer_id')
                            ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                            ->whereBetween('orders.order_date', [now()->addDays(21), now()->addDays(28)])
                            ->where('orders.status', 1)
                            ->where('orders.user_id', Auth::user()->id)
                            ->paginate(8);
                        $title = "Minggu Ke-4";
                    }
                } elseif ($request->report === "day") {
                    $title = "Harian";
                    $order = DB::table("orders")
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('users', 'users.id', '=', 'orders.user_id')
                        ->join('products', 'products.id', '=', 'order_details.product_id')
                        ->join('customers', 'customers.id', '=', 'orders.customer_id')
                        ->select('customers.name AS customer_name', 'users.name AS user_name', 'order_details.order_quantity AS order_quantity', 'order_details.total_price AS total_price', 'orders.order_date AS order_date', 'products.name AS product_name')
                        ->whereDay('orders.order_date', today())
                        ->where('orders.status', 1)
                        ->where('orders.user_id', Auth::user()->id)
                        ->paginate(8);
                } else {
                    $order = null;
                    $title = null;
                }
            } else {
                $order = null;
                $title = null;
            }
        }
        return view('livewire.admin.report.print', [
            "orders" => $order,
            "title" => $title
        ]);
    }
}
