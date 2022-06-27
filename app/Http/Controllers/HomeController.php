<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $products = Product::get();

        return view('home', compact(
            'sliders',
            'products'
        ));
    }

    public function productIndex()
    {
        $products = Product::paginate(12);
        return view('visitor.product.index', compact('products'));
    }

    public function productShow(Product $product)
    {
        return view('visitor.product.show', compact('product'));
    }
}
