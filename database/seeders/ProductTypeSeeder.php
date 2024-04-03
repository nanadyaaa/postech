<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    private $product_types = [
        ["pakaian", "Pakaian"],
        ["furniture", "Furniture"],
        ["aksesoris", "Aksesoris"],
        ["pakaian", "Pakaian"],
        ["kecantikan", "Kecantikan"],
        ["sembako", "Sembako"],
    ];

    public function run(): void
    {
        foreach ($this->product_types as $product_type) {
            \App\Models\ProductType::create([
                //"guid" => $role[0],
                "product_type_name" => $product_type[1],
            ]);
        }
    }
}
