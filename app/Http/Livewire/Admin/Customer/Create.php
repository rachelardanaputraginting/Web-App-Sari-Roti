<?php

namespace App\Http\Livewire\Admin\Customer;

use App\Models\City;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    public $province;
    public function render()
    {

        $provinces = Province::get();
        if ($this->province) {
                $cities = City::where('province_id', $this->province)->get();
        }else {
            $cities = City::get();
        }
    return view('livewire.admin.customer.create', [
            "provinces" => $provinces,
            "cities" => $cities
        ]);
    }

    use WithFileUploads;

    public $name, $email, $phone, $city, $street, $member, $image;

    public function store()
    {
        $validateData = $this->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "phone" => "required|numeric",
            "province" => "required",
            "city" => "required",
            "street" => "required",
            "image" => "file|image:max:1024|required"
        ]);

        $province = Province::where('province_id', $this->province)->first();
        $city = City::where('city_id', $this->city)->first();

        $validateData['member'] = 1;
        $validateData['province'] = $province->title;
        $validateData['province'] = $city->title;
        $validateData['user_id'] = Auth::user()->id;

        if ($this->image) {
            $image = date('dmy') . $this->image->getClientOriginalName();
            $validateData['image'] = $this->image->storeAs('customers', $image);
        }

        Customer::create($validateData);

        return redirect()->route('admin.customer');
    }
}
