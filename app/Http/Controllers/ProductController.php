<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        // Ambil semua kategori beserta produk-produknya
        $categories = Category::with('products')->get();

        // Kirim data ke view
        return view('product', compact('categories'));
    }

    public function show($id)
    {
        // Ambil artikel berdasarkan ID dari database
        $product = Product::findOrFail($id);

        // Tampilkan view 'detail.blade.php' dengan data artikel
        return view('detailProduct', compact('product'));
    }

    public function detail($id)
    {
        $product = Product::with('category')->findOrFail($id); // Ambil data produk berdasarkan id
        return view('detailProduct', compact('product'));
    }


}

