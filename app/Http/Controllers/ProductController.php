<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        // Ambil semua kategori dengan relasi produk
        $categories = Category::with('products')->get();

        // Buat query awal produk
        $query = Product::query();

        // Cek apakah ada parameter pencarian
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('specifications', 'like', '%' . $request->search . '%');
            });
        }

        // Filter berdasarkan kategori jika ada
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Ambil hasil produk
        $products = $query->get();

        // Kirim semua data ke view
        return view('product', [
            'categories' => $categories,
            'products' => $products,
        ]);
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

    public function searchProduk(Request $request)
    {
        $keyword = $request->search;

        // Ambil semua kategori
        $categories = Category::all();

        $query = Product::query();

        // Filter produk berdasarkan keyword
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('specifications', 'like', '%' . $keyword . '%');
            });
        }

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        $products = $query->get();
        
        return view('product', compact('products', 'categories', 'keyword'));
    }


}

