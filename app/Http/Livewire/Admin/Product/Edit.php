<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    public function render()
    {
        return view('livewire.admin.product.edit');
    }

    /**
     * mount or construct function
     */
    public function mount(Product $product)
    {
        $product = Product::find($product->id);

        if ($product) {
            $this->productId   = $product->id;
            $this->name    = $product->name;
            $this->image  = $product->image;
            $this->price  = $product->price;
            $this->stok  = $product->stok;
            $this->description  = $product->description;
        }
    }

    /**
     * update function
     */
    public $productId;
    public $name;
    public $image;
    public $price;
    public $stok;
    public $description;

    use WithFileUploads;

    public function update()
    {
        $validateData = $this->validate([
            'name'   => 'required',
            'image' => 'max:1024|required',
            'price' => 'required',
            'stok' => 'required',
            'description' => 'required',
        ]);

        $oldImage = Product::where('id', $this->productId)->first();

        if ($this->image != $oldImage->image) {
            $validateData["image"]  = $oldImage->image;
        } else {
            $validateData["image"]  = "file|image|required";
        }

        if ($this->image) {
            if ($oldImage->image) {
                Storage::delete($oldImage->image);
            }
            $image = date('dmy') . $this->image->getClientOriginalName();
            $validateData['image'] = $this->image->storeAs('products', $image);
        }

        Product::where('id', $this->productId)->update($validateData);


        return redirect()->route('admin.product');
    }

    use WithFileUploads;
}
