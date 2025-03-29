<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {
        $artikels = Artikel::all();
        return view('artikel', compact('artikels'));
    }

    public function showDetail08feb2018($id) {
        $artikel = Artikel::findOrFail($id);
        return view('detailArtikel.detail08feb2018', compact('artikel'));
    }


}