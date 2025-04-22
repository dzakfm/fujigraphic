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

    public function show($id)
    {
        // Ambil artikel berdasarkan ID dari database
        $artikel = Artikel::findOrFail($id);

        // Tampilkan view 'detail.blade.php' dengan data artikel
        return view('detailArtikel', compact('artikel'));
    }                                        

}