<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (isset($request)) {
            $product = Product::where('name', 'LIKE', '%' . $request->search . '%')->paginate(8);
        }else {
            $product = Product::paginate(8);
        }

        return view('livewire.product.index', [
            "products" => $product
        ]);
    }
}
