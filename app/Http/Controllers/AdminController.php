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
        $categories = Category::with('products')->get();
        $artikels = Artikel::all();
        $contacts = Contact::latest()->get(); // Ambil semua data kontak
    
        return view('admin.dashboard', compact('categories', 'artikels', 'contacts'));
    }
    

    public function storeCategory(Request $request) {
        $request->validate(['name' => 'required']);
        Category::create(['name' => $request->name]);
        return back();
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

        return back();
    }

    public function storeArticle(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->file('image') ? $request->file('image')->store('articles', 'public') : null;

        Artikel::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
        ]);

        return back();
    }


    public function deleteCategory($id) {
        Category::destroy($id);
        return back();
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
        return back();
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

        return back();
    }

    public function updateArticle(Request $request, $id) {
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $article = Artikel::find($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('articles', 'public');
        $article->image = $image;
    }

    $article->update([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return back();
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
    
}
