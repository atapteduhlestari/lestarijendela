<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\PostCategory;
use App\Models\PostImage;
use App\Models\Post;
use App\Models\Faq;
use Carbon\Carbon;
use App\Models\Sbu;


class PageController extends Controller
{
    public function contactIndex()
    {
        $contact = Profile::first();
        $sbu = Sbu::get();
        return view('visitor.contact.index', compact('contact', 'sbu'));
    }

    public function aboutIndex()
    {
        $about = Profile::first();
        return view('visitor.about.index', compact('about'));
    }

    public function blogIndex()
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->paginate(6);
        $categories = PostCategory::get();
        $archives = Post::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        return view('visitor.blog.index', compact('posts', 'categories', 'archives'));
    }

    public function blogCategory(PostCategory $postCategory)
    {
        $categories = PostCategory::get();
        $posts = $postCategory->posts()->paginate(6);
        $archives = Post::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        return view('visitor.blog.index', compact('categories', 'posts', 'archives'));
    }

    public function blogArchieve($month, $year)
    {

        $archives = Post::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $categories = PostCategory::get();
        $posts = Post::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->paginate(6);

        return view('visitor.blog.index', compact('categories', 'posts', 'archives'));
    }


    public function faqIndex()
    {
        $faqs = Faq::get();

        return view('visitor.faq.index', compact('faqs'));
    }

    public function categoryBlog(PostCategory $category)
    {
        return view('visitor.blog.category', compact('category'));
    }

    public function blogDetail(POST $post)
    {
        $archives = Post::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $categories = PostCategory::get();
        return view('visitor.blog.detail', compact('post', 'categories', 'archives'));
    }

    public function searchBlog(Request $request)
    {
        $keyword = $request->keyword;
        $posts = Post::where('title', 'like', "%" . $keyword . "%")->paginate(6);
        $categories = PostCategory::get();
        $archives = Post::select('id', 'created_at')
            ->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        return view('visitor.blog.index', compact('posts', 'categories', 'archives'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
