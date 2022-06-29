<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\PostCategory;
use App\Models\PostImage;
use App\Models\Post;
use App\Models\Faq;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactIndex()
    {
        $contacts = Profile::get();
        return view('visitor.contact.index', compact('contacts'));
    }

    public function aboutIndex()
    {
        $abouts = Profile::get();
        return view('visitor.about.index', compact('abouts'));
    }

    public function blogIndex()
    { 

       $posts = Post::with('category')->get();

      
        return view('visitor.blog.index', compact('posts'));
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

    public function blogDetail($id)
    {
        $images = PostImage::find($id);
        $posts = Post::find($id);
        $categories = PostCategory::find($id);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
