<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            "name" => "Cokelat Susu",
            "image" => "cokelat_susu.jpg",
            "price" => 6000,
            "stok" => 100,
            "description" => "Is Ready"
        ]);
        Product::create([
            "name" => "Sari Roti Tawar",
            "image" => "sari_roti_tawar.jpg",
            "price" => 15000,
            "stok" => 100,
            "description" => "Is Ready"
        ]);

        Product::create([
            "name" => "Cokelat Keju",
            "image" => "cokelat_keju.jpg",
            "price" => 8000,
            "stok" => 100,
            "description" => "Is Ready"
        ]);

        Product::create([
            "name" => "Cokelat Pandan",
            "image" => "cokelat_pandan.jpg",
            "price" => 10000,
            "stok" => 100,
            "description" => "Is Ready"
        ]);
    }
}
