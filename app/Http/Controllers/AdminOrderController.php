<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrder;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    public function store(Request $request, Product $product)
    {

        // dd($request);
        $validateData = $request->validate([
            "total_order" => "required|numeric"
        ]);

        // Order
        if ($request->total_order > $product->stok) {
            return redirect()->back();
        }

        $checkOrder = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (empty($checkOrder)) {
            $dataOrder['user_id'] = Auth::user()->id;
            $dataOrder['customer_id'] = 0;
            $dataOrder['order_date'] = now();
            $dataOrder['status'] = 0;
            $dataOrder['total_order_price'] = $product->price * $request->total_order;
            Order::create($dataOrder);
        } else {
            $newPriceOrder = $product->price * $request->total_order;
            $newDataOrder['total_order_price'] = $newPriceOrder + $checkOrder->total_order_price;
            Order::where('id', $checkOrder->id)->update($newDataOrder);
        }

        // CustomerOrder
        $idOrder = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($checkOrder)) {
            $dataCustomerOrder['user_id'] = Auth::user()->id;
            $dataCustomerOrder['order_id'] = $idOrder->id;
            $dataCustomerOrder['customer_id'] = 0;
            $dataCustomerOrder['date'] = now();
            $dataCustomerOrder['status'] = 0;
            $dataCustomerOrder['price'] = $product->price * $request->total_order;
            CustomerOrder::create($dataCustomerOrder);
        } else {
            $newPriceCustomerOrder = $product->price * $request->total_order;
            $newDataCustomerOrder['price'] = $newPriceCustomerOrder + $checkOrder->total_order_price;
            CustomerOrder::where('id', $checkOrder->id)->update($newDataCustomerOrder);
        }

        // Order Details
        $idOrder = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // dd($idOrder);

        $checkOrderDetails = OrderDetail::with(['order', 'product'])->where('product_id', $product->id)->where('order_id', $idOrder->id)->first();

        if (empty($checkOrderDetails)) {
            $dataOrderDetails['product_id'] = $product->id;
            $dataOrderDetails['order_id'] = $idOrder->id;
            $dataOrderDetails['order_quantity'] = $request->total_order;
            $dataOrderDetails['total_price'] = $request->total_order * $product->price;
            OrderDetail::create($dataOrderDetails);
        } else {
            $newDataOrderDetails['order_quantity'] = $checkOrderDetails->order_quantity + $request->total_order;
            $newDataOrderDetails['total_price'] = $checkOrderDetails->total_price + ($request->total_order * $product->price);
            OrderDetail::where('id', $checkOrderDetails->id)->update($newDataOrderDetails);
        }

        return redirect()->route('admin.order');
    }
}
