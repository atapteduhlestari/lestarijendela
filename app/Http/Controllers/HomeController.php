<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $products = Product::take(4)->get();

        return view('home', compact(
            'sliders',
            'products'
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

    public function galleryIndex()
    {
        return 'under construction';
    }
}
