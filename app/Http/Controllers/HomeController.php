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
    $artikels = Artikel::latest()->take(3)->get();
    $products = Product::latest()->take(3)->get();
    return view('home', compact('artikels', 'products'));
}

}

