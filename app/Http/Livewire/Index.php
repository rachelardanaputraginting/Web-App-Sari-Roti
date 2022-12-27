<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $best_product = DB::table('order_details')
                    ->select('products.name', 'products.price', 'products.stok', 'products.image', 'products.id')
                    ->join('products', 'products.id', '=', 'order_details.product_id')
                    ->join('orders', 'orders.id', '=', 'order_details.order_id')
                    ->where('total_price', '>', 100000)
                    ->where('orders.status', 1)
                    ->get();


        return view('livewire.index', [
            "products" => Product::limit(8)->latest()->get(),
            "best_products" => $best_product
        ])->layout('layouts.app');
    }
}
