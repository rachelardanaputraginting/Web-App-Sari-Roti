<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.product.create');
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    use WithFileUploads;

    public $name, $image, $price, $stok, $description;

    public function store()
    {
        $validateData = $this->validate([
            "name" => "required",
            "image" => "image|max:2048|required",
            "price" => "required|numeric",
            "stok" => "required|numeric",
            "description" => "required|min:5"
        ]);

        if ($this->image) {
            $image = date('dmy') . $this->image->getClientOriginalName();
            $validateData['image'] = $this->image->storeAs('products', $image);
        }

        Product::create($validateData);

        return redirect()->route('admin.product');
    }

}
