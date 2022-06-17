<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::get();
        return view('dashboard.product.category.index', compact('categories'));
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

        ProductCategory::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show(ProductCategory $productCategory)
    {
        //
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('dashboard.product.category.edit', compact('productCategory'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $productCategory->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->products()
            ->where('category_id', $productCategory->id)
            ->update(['category_id' => null]);

        $productCategory->subCategories()
            ->where('category_id', $productCategory->id)
            ->update(['category_id' => null]);

        $productCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
