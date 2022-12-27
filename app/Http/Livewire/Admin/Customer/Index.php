<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\Customer;
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
            $customers = Customer::where('name','like', '%' . $this->search . '%')
            ->latest()->paginate(8);
        }else {
            $customers = Customer::latest()->paginate(8);
        }

        return view('livewire.admin.customer.index', [
            "customers" => $customers
        ]);
    }
}
