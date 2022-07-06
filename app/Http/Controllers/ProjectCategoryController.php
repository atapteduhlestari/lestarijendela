<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::get();
        return view('dashboard.project.category.index', compact('categories'));
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

        ProjectCategory::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show(ProjectCategory $projectCategory)
    {
        //
    }

    public function edit(ProjectCategory $projectCategory)
    {
        return view('dashboard.project.category.edit', compact('projectCategory'));
    }

    public function update(Request $request, ProjectCategory $projectCategory)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $projectCategory->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->projects()
            ->where('category_id', $projectCategory->id)
            ->update(['category_id' => null]);

        $projectCategory->delete();
        return redirect()->back()->with('success', 'Success!');
    }
}
