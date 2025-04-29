<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Artikel;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $artikels = Artikel::all();
        $contacts = Contact::latest()->get(); // Ambil semua data kontak
    
        return view('admin.dashboard', compact('artikels', 'contacts'));
    }

    public function storeCategory(Request $request) {
        $request->validate(['name' => 'required']);
        Category::create(['name' => $request->name]);
        return back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function storeProduct(Request $request) {
        $request->validate([
            'name' => 'required',
            'specifications' => 'required',
            'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        $image = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'specifications' => $request->specifications,
            'image' => $image,
            'category_id' => $request->category_id,
        ]);

        return back()->with('success3', 'Produk berhasil ditambahkan!');
    }

    public function storeArticle(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'date' => 'nullable|date',
        ]);

        $image = $request->file('image') ? $request->file('image')->store('articles', 'public') : null;

        $date = $request->date ?? now();

        Artikel::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        return back()->with('success', 'Artikel berhasil ditambahkan!');
    }


    public function deleteCategory($id) {
        Category::destroy($id);
        return back()->with('success2', 'Kategori berhasil dihapus!');
    }

    public function deleteProduct($id) {
        Product::destroy($id);
        return back();
    }

    public function deleteArticle($id) {
        Artikel::destroy($id);
        return back();
    }

    public function updateCategory(Request $request, $id) {
        $request->validate(['name' => 'required']);
        Category::find($id)->update(['name' => $request->name]);
        return back()->with('success1', 'Kategori berhasil diperbarui!');
    }

    public function updateProduct(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'specifications' => 'required',
        ]);
        $product = Product::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('products', 'public');
            $product->image = $image;
        }

        $product->name = $request->name;
        $product->specifications = $request->specifications;
        $product->category_id = $request->category_id;
        $product->save();

        return back()->with('success', 'Produk berhasil diperbarui!');
    }

    public function updateArticle(Request $request, $id) {

    $artikel = Artikel::find($id);

    if (!$artikel) {
        return redirect()->back()->with('error', 'Artikel tidak ditemukan.');
    }

    $artikel->title = $request->title;
    $artikel->content = $request->content;

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('artikel', 'public');
        $artikel->image = $path;
    }

    $date = $request->date ? $request->date : $artikel->created_at->format('Y-m-d');
    $artikel->created_at = $date;
    $artikel->updated_at = now();

    $artikel->save();

    return redirect()->route('admin.edit-article', $id)->with('success', 'Artikel berhasil diperbarui!');

    }

    public function storeContact(Request $request) {
    
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required|string|max:15',
            'pesan' => 'required|string',
        ]);
    
        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'pesan' => $request->pesan,
        ]);
    
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function destroyContact($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    
        return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
    }

    public function editArticle($id) {
        $artikels = Artikel::findOrFail($id);
        return view('admin.edit-article', compact('artikels'));
    }
    
    public function artikelList() {
        $artikels = Artikel::all(); 
        return view('admin.dArtikel', compact('artikels'));
    }

    public function artikelAdd() {
        $artikels = Artikel::all();
        return view('admin.add-article', compact('artikels'));
    }

    public function dProduct() {
        $categories = Category::with('products')->get();
        return view('admin.dProduct', compact('categories'));
    }

    public function editProduct($id) {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.edit-product', compact('product', 'categories'));
    }

    public function productAdd() {
        $product = Product::all();
        $categories = Category::all();
        return view('admin.add-product', compact('product', 'categories'));
    }
}
