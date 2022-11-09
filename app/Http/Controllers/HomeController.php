<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProductFile;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $banners = Banner::get();
        $products = Product::take(6)->get();
        $posts = Post::orderBy('created_at', 'DESC')->take(3)->get();
        $productCategories = ProductCategory::get();
        $productSubCategories = ProductSubCategory::where('sub_show', 1)->get();

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

        $categories = ProductCategory::orderBy('title', 'asc')->get();
        $subCategories = ProductSubCategory::orderBy('title', 'asc')->get();

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
        $data = request()->all();
        $categories = ProjectCategory::orderBy('title', 'asc')->get();
        $products = Product::orderBy('title', 'asc')->get();
        $projects = Project::filter($data)->orderBy('title', 'asc')->paginate(6);

        return view('visitor.project.index', compact('projects', 'categories', 'products'));
    }

    public function galleryShow(Project $project)
    {
        return view('visitor.project.show', compact('project'));
    }

    public function galleryCategory(ProjectCategory $projectCategory)
    {
        $categories = ProjectCategory::orderBy('title', 'asc')->get();
        $products = Product::orderBy('title', 'asc')->get();
        $projects = $projectCategory->projects()->paginate(12);

        return view('visitor.project.index', compact(
            'projects',
            'categories',
            'products'
        ));
    }
}
