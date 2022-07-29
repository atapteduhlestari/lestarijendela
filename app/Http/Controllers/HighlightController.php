<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HighlightController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('dashboard.highlight.indexHighlight', compact('sliders'));
    }

    public function saveSlider(Request $request)
    {
        $request->validate([
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/slider', $file->hashName());
        $data['url'] = $imageUrl;

        Slider::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);
        return view('dashboard.highlight.edit', compact('slider'));
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::find($id);

        $request->validate([
            'url' => 'file|max:10240'
        ]);

        $data = $request->all();

        if ($request->file('url')) {
            Storage::delete($slider->url);
            $file = $request->file('url');
            $imageUrl = $file->storeAs('assets/dashboard/slider', $file->hashName());
            $data['url'] = $imageUrl;
        } else {
            $data['url'] = $slider->url;
        }

        $slider->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $slider->delete($id);
        return redirect()->back()->with('success', 'Success!');
    }

    public function banner()
    {
        $banners = Banner::get();
        return view('dashboard.highlight.banner.index', compact('banners'));
    }

    public function saveBanner(Request $request)
    {
        $request->validate([
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/banner', $file->hashName());
        $data['url'] = $imageUrl;

        Banner::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function editBanner($id)
    {

        $banner = Banner::find($id);
        return view('dashboard.highlight.banner.edit', compact('banner'));
    }

    public function updateBanner(Request $request, $id)
    {

        $banner = Banner::find($id);

        $request->validate([
            'url' => 'file|max:10240'
        ]);

        $data = $request->all();

        if ($request->file('url')) {
            Storage::delete($banner->url);
            $file = $request->file('url');
            $imageUrl = $file->storeAs('assets/dashboard/banner', $file->hashName());
            $data['url'] = $imageUrl;
        } else {
            $data['url'] = $banner->url;
        }

        $banner->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);
        $banner->delete($id);
        return redirect()->back()->with('success', 'Success!');
    }
}
