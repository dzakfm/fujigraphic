<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $categories = Category::with('products')->get();
        return view('admin.dashboard', compact('categories'));
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

    public function deleteCategory($id) {
        Category::destroy($id);
        return back();
    }

    public function deleteProduct($id) {
        Product::destroy($id);
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
}
