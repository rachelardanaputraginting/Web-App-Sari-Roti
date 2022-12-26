<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (Auth::user()->level === 1) {
            $total_order = Order::with(['user', 'order_details', 'customer_order'])->where('status', 1)
            ->sum('total_order_price');
        }else {
            $total_order = Order::with(['user', 'order_details', 'customer_order'])->where('status', 1)->where('user_id', Auth::user()->id)
            ->sum('total_order_price');
        }

        $total_product = Product::with(['order_details'])->get()->count();

        $customer = User::with(['orders', 'customer_orders'])->where('level', 2)->paginate(8);
        $total_customer = $customer->count();


        if (Auth::user()->level === 1) {
            $total_user = User::with(['orders', 'customer_orders'])->get()->count();
        }elseif(AUth::user()->level === 2){
            $total_user = User::with(['orders', 'customer_orders'])->where('level', 2)->count();
        }
        $total_cart = Order::with(['user', 'order_details', 'customer_order'])->where('status', 0)
            ->where('user_id', Auth::user()->id)
            ->count();

        $total_history = Order::with(['user', 'order_details', 'customer_order'])->where('status', 1)
            ->where('user_id', Auth::user()->id)
            ->count();

        if (!empty(Auth::user()->level === 1)) {
            // $grapicChart = DB::table("order_details")
            //             ->join('orders', 'orders.id', '=', 'order_details.order_id')
            //             ->select('orders.total_order_price')
            //             ->whereRaw('MONTH(orders.order_date) = ?', [date('m')])
            //             ->groupBy('orders.total_order_price')
            //             ->sum('orders.total_order_price')
            //             ->pluck('orders.total_order_price');
            $grapicChart =  Order::with(['user', 'order_details', 'customer_order'])->select(DB::raw("SUM(total_order_price)) as total"))->GroupBy(DB::raw("Month(order_date)"))
            ->pluck("total");

            $month = Order::with(['user', 'order_details', 'customer_order'])->select(DB::raw("MONTHNAME(order_date) as bulan"))
                    ->GroupBy(DB::raw("MONTHNAME(order_date)"))
                    ->pluck("bulan");

        }elseif(!empty(Auth::user()->level === 2)) {
                $grapicChart =  Order::with(['user', 'order_details', 'customer_order'])->select(DB::raw("SUM(total_order_price) as total"))->where('user_id', Auth::user()->id)->GroupBy(DB::raw("Month(order_date)"))
                    ->pluck("total");

                $month = Order::with(['user', 'order_details', 'customer_order'])->select(DB::raw("MONTHNAME(order_date) as bulan"))->where('user_id', Auth::user()->id)
                            ->GroupBy(DB::raw("MONTHNAME(order_date)"))
                            ->pluck("bulan");
        }


        return view('livewire.admin.index', [
            "total_order" => $total_order,
            "total_product" => $total_product,
            "total_customer" => $total_customer,
            "total_user" => $total_user,
            "total_cart" => $total_cart,
            "total_history" => $total_history,
            "grapicChart" => $grapicChart,
            "month" => $month
        ]);
    }
}
