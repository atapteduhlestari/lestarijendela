<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        $products = Product::get();
        $categories = ProjectCategory::get();
        return view('dashboard.project.index', compact(
            'projects',
            'products',
            'categories'
        ));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'year' => 'max:4'
        ]);

        $data = $request->except('product_id');
        $data['slug'] = Str::slug($request->title);

        $project = Project::create($data);
        $project->products()->sync($request->product_id);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function edit(Project $project)
    {
        $categories = ProjectCategory::get();
        $products = Product::get();
        return view('dashboard.project.edit', compact('project', 'products', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'product_id' => 'required',
            'category_id' => 'required',
            'year' => 'max:4'
        ]);

        $data = $request->except('product_id');
        $data['slug'] = Str::slug($request->title);

        $project->products()->sync($request->product_id);
        $project->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Project $project)
    {
        foreach ($project->images as $image) {
            Storage::delete($image->url);
        }
        $project->products()->detach();
        $project->delete();
        return redirect()->back()->with('success', 'Success!');
    }

    public function createImage(Project $project)
    {
        return view('dashboard.project.image.create', compact('project'));
    }

    public function saveImage(Request $request)
    {
        $request->validate([
            'image' => 'required|file|max:2048'
        ]);

        $data = $request->all();

        $file = $request->file('image');
        $hashName = $file->hashName();
        $imageUrl = $file->storeAs('assets/dashboard/project', $hashName);
        $data['image'] = $imageUrl;

        ProjectImage::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function deleteImage($imageId)
    {
        $image = ProjectImage::find($imageId);
        Storage::delete($image->url);
        $image->delete();

        return redirect()->back()->with('success', 'Success!');
    }
}
