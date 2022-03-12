<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Impresora',
                'product_description' => 'Epson L355',
                'product_stock' => 100,
                'product_price' => 210.50
            ],
            [
                'product_name' => 'Laptop',
                'product_description' => 'HP 14La001',
                'product_stock' => 10,
                'product_price' => 550.10
            ],
            [
                'product_name' => 'Celular',
                'product_description' => 'Redmi 200',
                'product_stock' => 5,
                'product_price' => 150.50
            ],
            [
                'product_name' => 'Monitor',
                'product_description' => 'Lg-19.5 pulgadas',
                'product_stock' => 99,
                'product_price' => 112.10
            ],
            [
                'product_name' => 'Televisor Sony',
                'product_description' => '23 pulgadas Android',
                'product_stock' => 19,
                'product_price' => 780.50
            ]
        ]);
    }
}
