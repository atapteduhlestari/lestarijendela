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
    public function contactIndex()
    {
        $contact = Profile::first();
        return view('visitor.contact.index', compact('contact'));
    }

    public function aboutIndex()
    {
        $about = Profile::first();
        return view('visitor.about.index', compact('about'));
    }

    public function blogIndex()
    {
        $posts = Post::with('category')->paginate(6);
        $categories = PostCategory::get();
        return view('visitor.blog.index', compact('posts', 'categories'));
    }

    public function blogCategory(PostCategory $postCategory)
    {
        $categories = PostCategory::get();
        $posts = $postCategory->posts()->paginate(6);
        return view('visitor.blog.index', compact('categories', 'posts'));
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
        return $post;
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
