<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function edit(Product $product)
    {
        return view('livewire.admin.product.edit', [
            "product" => $product
        ]);
    }
}
