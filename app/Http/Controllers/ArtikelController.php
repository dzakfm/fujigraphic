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

    public function showDetail($id) {
        $detailName = "detail" . $id; // Misalnya: detail1, detail2, dll.
    
        if (view()->exists("detailArtikel.$detailName")) {
            // Ambil artikel dari database berdasarkan ID
            $artikel = Artikel::findOrFail($id);
    
            // Menampilkan halaman sesuai dengan detailName
            return view("detailArtikel.$detailName", compact('artikel'));
        } else {
            abort(404); // Jika view tidak ditemukan, tampilkan error 404
        }
    }                                       

}