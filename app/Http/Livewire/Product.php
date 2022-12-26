<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        if (isset($request)) {
            $product = ModelsProduct::where('name', 'LIKE', '%' . $request->search . '%')->paginate(8);
        }else {
            $product = ModelsProduct::paginate(8);
        }
        return view('livewire.product', [
            "products" => $product
        ]);
    }
}
