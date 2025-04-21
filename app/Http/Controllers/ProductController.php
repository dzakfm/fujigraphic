<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function product()
    {
        // Ambil semua kategori beserta produk-produknya
        $categories = Category::with('products')->get();

        // Kirim data ke view
        return view('product', compact('categories'));
    }
}

