<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

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
            'url' => 'max:10240'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $image = $request->file('url');
        $imageUrl = $image->storeAs('assets/dashboard/product/category/images', $image->hashName());
        $data['url'] = $imageUrl;

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
            'url' => 'max:10240'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->file('url')) {

            Storage::delete($productCategory->url);
            $image = $request->file('url');
            $imageUrl = $image->storeAs('assets/dashboard/product/category/images', $image->hashName());
            $data['url'] = $imageUrl;
        } else {
            $data['url'] = $productCategory->url;
        }

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

        Storage::delete($productCategory->url);
        $productCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
