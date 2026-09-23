<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'name' => 'Nasi Goreng',
                'category' => 'Makanan',
                'price' => 15000,
                'description' => 'Nasi goreng spesial dengan telur dan ayam.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mie Ayam',
                'category' => 'Makanan',
                'price' => 12000,
                'description' => 'Mie ayam lezat dengan kuah kaldu yang gurih.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Es Teh Manis',
                'category' => 'Minuman',
                'price' => 5000,
                'description' => 'Es teh manis segar untuk melepas dahaga.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kopi Hitam',
                'category' => 'Minuman',
                'price' => 8000,
                'description' => 'Kopi hitam pekat untuk pecinta kopi sejati.',
                'image' => 'null',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pisang Goreng',
                'category' => 'Cemilan',
                'price' => 7000,
                'description' => 'Pisang goreng renyah dengan taburan gula halus.',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
