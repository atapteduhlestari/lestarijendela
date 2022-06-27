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
        $products = Product::get();
        return view('visitor.product.index', compact('products'));
    }
}
