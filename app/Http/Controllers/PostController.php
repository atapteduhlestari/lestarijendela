<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $categories = PostCategory::get();
        return view('dashboard.post.index', compact('posts', 'categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Post::create($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = PostCategory::get();
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $post->update($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
