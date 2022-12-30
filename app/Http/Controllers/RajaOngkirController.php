<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;

class RajaOngkirController extends Controller
{
    public function cities(City $city){
        $cities = City::where('province_id', $city->id)->pluck('title', 'city_id');
        return json_encode($cities);
    }
}
