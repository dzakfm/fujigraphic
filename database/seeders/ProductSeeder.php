<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Canon IR 3045',
            'specification' => 'Fotokopi cepat dengan resolusi tinggi',
            'image' => 'canon_ir_3045.jpg',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Laminator A3',
            'specification' => 'Laminating kertas ukuran A3',
            'image' => 'laminator_a3.jpg',
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Scanner Epson V39',
            'specification' => 'Scanner dokumen resolusi tinggi',
            'image' => 'epson_v39.jpg',
            'category_id' => 3
        ]);
    }
}
