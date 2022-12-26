<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        if (isset($request)) {
            $product = Product::with(['order_details'])->where('name', 'LIKE', '%' . $request->search . '%')->paginate(8);
        }else {
            $product = Product::with(['order_details'])->paginate(8);
        }
        return view('livewire.product');
    }
}
