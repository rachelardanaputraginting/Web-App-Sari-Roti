<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    public function render()
    {
        return view('livewire.admin.user.create');
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    use WithFileUploads;
    public $name, $image, $email, $address, $level, $phone;

    public function store()
    {
        $validateData = $this->validate([
            "name" => "required",
            "image" => "image|max:2048|required|",
            "email" => "required|email|unique:users",
            "address" => "required|min:5",
            "level" => "required",
            "phone" => "required|numeric",
        ]);

        $validateData['password'] = Hash::make('sariroti');

        if ($this->image) {
            $image = date('dmy') . $this->image->getClientOriginalName();
            $validateData['image'] = $this->image->storeAs('products', $image);
        }


        User::create($validateData);

        return redirect()->route('admin.user');
    }
}
