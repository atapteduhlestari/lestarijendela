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
        $data['deskripsi'] = $this->uploadBodyImage($data['deskripsi']);
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
        $data['deskripsi'] = $this->uploadBodyImage($data['deskripsi']);
        $data['slug'] = Str::slug($request->title);

        $post->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Post $post)
    {
        $this->deleteBodyImage($post->deskripsi);

        foreach ($post->images as $image) {
            Storage::delete($image->url);
        }

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
            'url' => 'required|file|max:10240'
        ]);

        $data = $request->all();

        $file = $request->file('url');
        $imageUrl = $file->storeAs('assets/dashboard/post', $file->hashName());
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

    public function uploadBodyImage($body)
    {
        if (empty($body))
            return;

        libxml_use_internal_errors(true);
        $dom = new \DomDocument('1.0', 'UTF-8');
        $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        $bs64 = 'base64';

        if ($imageFile) {
            foreach ($imageFile as $item => $img) {
                $data = $img->getAttribute('src');
                if (strpos($data, $bs64) == true) {
                    $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
                    $imageName = "/assets/dashboard/images/posts/" . Str::random(25) . '.png';
                    $path = public_path() . $imageName;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $imageName);
                    $img->setAttribute('class', 'img-responsive col');
                } else {
                    $imageName = $data;
                    $img->setAttribute('src', $imageName);
                    $img->setAttribute('class', 'img-responsive col');
                }
            }
        }

        $body = $dom->saveHTML();
        return $body;
    }

    public function deleteBodyImage($body)
    {
        if (empty($body))
            return;

        libxml_use_internal_errors(true);
        $dom = new \DomDocument('1.0', 'UTF-8');
        $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $img) {
            $data = $img->getAttribute('src');
            unlink(public_path() . $data);
        }

        $body = $dom->saveHTML();
    }
}
