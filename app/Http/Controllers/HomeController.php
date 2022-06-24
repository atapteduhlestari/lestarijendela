<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('home', compact('sliders'));
    }
}
