<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach ($daftarProvinsi as $provinciRow) {
            Province::create([
                'province_id' => $provinciRow['province_id'],
                'title' => $provinciRow['province']
            ]);

            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinciRow['province_id'])->get();

            foreach ($daftarKota as $cityRow) {
                City::create([
                    'province_id' => $provinciRow['province_id'],
                    'city_id' => $cityRow['city_id'],
                    'title' => $cityRow['city_name']
                ]);
            }
        }
    }
}
