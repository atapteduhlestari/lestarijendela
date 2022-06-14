<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();
        return view('dashboard.product.index', compact('products', 'categories', 'subCategories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Product::create($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();

        return view('dashboard.product.edit', compact(
            'product',
            'categories',
            'subCategories'
        ));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $product->update($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
