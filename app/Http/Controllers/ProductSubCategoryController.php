<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Support\Facades\Storage;

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
            'url' => 'max:2048'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->file('url')) {
            $image = $request->file('url');
            $imageUrl = $image->storeAs('assets/dashboard/product/category/images', $image->hashName());
            $data['url'] = $imageUrl;
        }

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
            'url' => 'max:2048'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['url'] = $request->file('url') ? $this->updateImage($request->file('url'), $productSubCategory->url) : $productSubCategory->url;

        $productSubCategory->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function updateImage($newImage, $oldImage = null)
    {
        Storage::delete($oldImage);
        $imageUrl = $newImage->storeAs('assets/dashboard/product/category/images', $newImage->hashName());
        return $imageUrl;
    }

    public function destroy(ProductSubCategory $productSubCategory)
    {
        $productSubCategory->products()
            ->where('sub_category_id', $productSubCategory->id)
            ->update(['sub_category_id' => null]);

        Storage::delete($productSubCategory->url);
        $productSubCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
