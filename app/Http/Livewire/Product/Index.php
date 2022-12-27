<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $search;

    protected $queryString = ['search'=> ['except' => '']];

    use WithPagination;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('name','like', '%' . $this->search . '%')
            ->latest()->paginate(8);
        }else {
            $products = Product::paginate(8);
        }
        return view('livewire.product.index', [
            "products" => $products
        ]);
    }
}
