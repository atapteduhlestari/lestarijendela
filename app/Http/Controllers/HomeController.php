<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\ProductFile;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $banners = Banner::get();
        $products = Product::take(4)->get();
        $posts = Post::take(3)->get();
        $productCategories = ProductCategory::get();
        $productSubCategories = ProductSubCategory::get();

        return view('home', compact(
            'sliders',
            'banners',
            'products',
            'posts',
            'productCategories',
            'productSubCategories',
        ));
    }

    public function productIndex()
    {
        $data = request()->all();

        $products = Product::filter($data)
            ->orderBy('title', 'ASC')->paginate(12);

        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();

        return view('visitor.product.index', compact(
            'products',
            'categories',
            'subCategories'
        ));
    }

    public function productShow(Product $product)
    {
        return view('visitor.product.show', compact('product'));
    }

    public function productCategory(ProductCategory $productCategory)
    {
        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();
        $products = $productCategory->products()->paginate(12);

        return view('visitor.product.index', compact(
            'products',
            'categories',
            'subCategories'
        ));
    }

    public function productSubCategory(ProductSubCategory $productSubCategory)
    {
        $categories = ProductSubCategory::get();
        $subCategories = ProductSubCategory::get();
        $products = $productSubCategory->products()->paginate(12);

        return view('visitor.product.index', compact(
            'products',
            'categories',
            'subCategories'
        ));
    }

    public function productDownload($documentId)
    {
        $document = Productfile::find($documentId);
        return Storage::download($document->url);
    }

    public function galleryIndex()
    {
        return 'under construction';
    }
}
