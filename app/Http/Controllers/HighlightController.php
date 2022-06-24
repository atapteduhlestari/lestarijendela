<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Banner;
use Illuminate\Http\Request;

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
            'heading' => 'required',
            'description' => 'required',
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/images/slider', $file->hashName());
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
            'heading' => 'required',
            'description' => 'required',
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();


        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/images/slider', $file->hashName());
        $data['url'] = $imageUrl;

        $slider->update($data);

        return redirect()->action([HighlightController::class, 'index'])->with('success', 'Success!');
        
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
            'heading' => 'required',
            'description' => 'required',
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/images/slider', $file->hashName());
        $data['url'] = $imageUrl;

        Banner::create($data);
        return redirect()->action([HighlightController::class, 'banner'])->with('success', 'Success!');
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
            'heading' => 'required',
            'description' => 'required',
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

    


        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/images/slider', $file->hashName());
        $data['url'] = $imageUrl;

        $banner->update($data);

        return redirect()->action([HighlightController::class, 'banner'])->with('success', 'Success!');
        
    }

    public function deleteBanner($id)
    {
        $banner = Banner::find($id);

        $banner->delete($id);

        return redirect()->action([HighlightController::class, 'banner'])->with('success', 'Success!');
    }
}
