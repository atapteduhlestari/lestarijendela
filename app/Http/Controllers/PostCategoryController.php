<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::get();
        return view('dashboard.post.category.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        PostCategory::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show(PostCategory $postCategory)
    {
        //
    }

    public function edit(PostCategory $postCategory)
    {
        return view('dashboard.post.category.edit', compact('postCategory'));
    }

    public function update(Request $request, PostCategory $postCategory)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $postCategory->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(PostCategory $postCategory)
    {
        $postCategory->posts()
            ->where('category_id', $postCategory->id)
            ->update(['category_id' => null]);

        $postCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
