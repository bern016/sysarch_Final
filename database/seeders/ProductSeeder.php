<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
    \App\Models\Product::insert([
        ['name' => 'Product A', 'description' => 'Description A', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Product B', 'description' => 'Description B', 'created_at' => now(), 'updated_at' => now()],
    ]);
}
}
