<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    // ambil data umum untuk halaman depan, misalnya:
    $artikels = Artikel::latest()->take(6)->get();
    $products = Product::where('category_id', 1)->latest()->take(14)->get();
    return view('home', compact('artikels', 'products'));
}

}

