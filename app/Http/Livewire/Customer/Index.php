<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{
    public $search;

    public function render()
    {
        if (isset($search)) {
            $customer = Customer::where('name', 'LIKE', '%' . $this->search . '%')->latest()->paginate(8);
        } else {
            $customer = Customer::latest()->paginate(8);
        }

        return view('livewire.admin.customer.index', [
            "customers" => $customer
        ]);
    }
}
