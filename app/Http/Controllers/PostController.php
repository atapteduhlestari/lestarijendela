<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\PostCategory;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function createImage(Post $post)
    {
        return view('dashboard.post.image.create', compact('post'));
    }

    public function saveImage(Request $request)
    {
        $request->validate([
            'url' => 'required|file|max:5120'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/img/post', $file->hashName());
        $data['url'] = $imageUrl;

        PostImage::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function deleteImage($imageId)
    {
        $image = PostImage::find($imageId);
        Storage::delete($image->url);
        $image->delete();

        return redirect()->back()->with('success', 'Success!');
    }
}
