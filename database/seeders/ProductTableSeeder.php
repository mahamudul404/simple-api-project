<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
                'price' => 100,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
                'price' => 200,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description of Product 3',
                'price' => 300,
            ]
        ];
        Product::insert($products);
    }

}
