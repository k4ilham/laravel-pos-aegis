<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPhone 12',
                'unit_id' => 5, // ID unit sesuai dengan tabel "product_units"
                'cash_price' => 10000000,
                'credit_price' => 11000000,
                'stok' => 10,
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'unit_id' => 5,
                'cash_price' => 9000000,
                'credit_price' => 9900000,
                'stok' => 10,
            ],
            [
                'name' => 'Google Pixel 5',
                'unit_id' => 5,
                'cash_price' => 8000000,
                'credit_price' => 9000000, // Harga kredit kosong, jika tidak ada
                'stok' => 10,
            ],
            [
                'name' => 'Xiaomi Mi 11',
                'unit_id' => 5,
                'cash_price' => 7000000,
                'credit_price' => 8000000,
                'stok' => 10,
            ],
            [
                'name' => 'OPPO Find X3 Pro',
                'unit_id' => 5,
                'cash_price' => 8000000,
                'credit_price' => 9000000,
                'stok' => 10,
            ],
            [
                'name' => 'Realme 8 Pro',
                'unit_id' => 5,
                'cash_price' => 4000000,
                'credit_price' => 5000000,
                'stok' => 10,
            ],
            [
                'name' => 'Vivo V21',
                'unit_id' => 5,
                'cash_price' => 6000000,
                'credit_price' => 6600000,
                'stok' => 10,
            ],
            [
                'name' => 'OnePlus 9',
                'unit_id' => 5,
                'cash_price' => 8000000,
                'credit_price' => 9000000,
                'stok' => 10,
            ],
            [
                'name' => 'Nokia 8.3',
                'unit_id' => 5,
                'cash_price' => 5000000,
                'credit_price' => 6000000,
                'stok' => 10,
            ],
            [
                'name' => 'Motorola Edge',
                'unit_id' => 5,
                'cash_price' => 7000000,
                'credit_price' => 8000000,
                'stok' => 10,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
