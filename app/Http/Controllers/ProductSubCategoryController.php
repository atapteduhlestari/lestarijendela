<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;

class ProductSubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = ProductSubCategory::get();
        $categories = ProductCategory::get();
        return view('dashboard.product.sub_category.index', compact('subCategories', 'categories'));
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

        ProductSubCategory::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show(ProductSubCategory $productSubCategory)
    {
        //
    }

    public function edit(ProductSubCategory $productSubCategory)
    {
        $categories = ProductCategory::get();
        return view('dashboard.product.sub_category.edit', compact('productSubCategory', 'categories'));
    }

    public function update(Request $request, ProductSubCategory $productSubCategory)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $productSubCategory->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(ProductSubCategory $productSubCategory)
    {
        $productSubCategory->products()
            ->where('sub_category_id', $productSubCategory->id)
            ->update(['sub_category_id' => null]);

        $productSubCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
