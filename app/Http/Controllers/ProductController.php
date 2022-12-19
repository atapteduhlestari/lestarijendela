<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductFile;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();
        return view('dashboard.product.index', compact('products', 'categories', 'subCategories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        $data['deskripsi'] = $this->uploadBodyImage($data['deskripsi']);
        $data['spesifikasi'] = $this->uploadBodyImage($data['spesifikasi']);
        $data['slug'] = Str::slug($request->title);

        Product::create($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::get();
        $subCategories = ProductSubCategory::get();

        return view('dashboard.product.edit', compact(
            'product',
            'categories',
            'subCategories'
        ));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        $data['deskripsi'] = $this->uploadBodyImage($data['deskripsi']);
        $data['spesifikasi'] = $this->uploadBodyImage($data['spesifikasi']);
        $data['slug'] = Str::slug($request->title);

        $product->update($data);

        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Product $product)
    {
        $this->deleteBodyImage($product->deskripsi);
        $this->deleteBodyImage($product->spesifikasi);

        foreach ($product->images as $image) {
            Storage::delete($image->url);
        }

        foreach ($product->documents as $doc) {
            Storage::delete($doc->url);
        }

        $product->projects()->detach();
        $product->delete();
        return redirect()->back()->with('success', 'Success!');
    }

    public function createFile(Product $product)
    {
        return view('dashboard.product.files.createFile', compact('product'));
    }


    public function saveImage(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'url' => 'required|max:2048'
        ]);

        $data = $request->all();

        $image = $request->file('url');
        $imageUrl = $image->storeAs('assets/dashboard/product/images', $image->hashName());
        $data['url'] = $imageUrl;

        ProductImage::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function deleteImage($imageId)
    {
        $image = ProductImage::find($imageId);
        Storage::delete($image->url);
        $image->delete();

        return redirect()->back()->with('success', 'Success!');
    }

    public function saveDocument(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'url' => 'required|max:2048'
        ]);

        $data = $request->all();

        $document = $request->file('url');
        $name = $document->getClientOriginalName();
        $ext = $document->extension();
        $documentUrl = $document->storeAs('assets/dashboard/product/documents', $name);
        $data['url'] = $documentUrl;

        ProductFile::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function downloadDocument($documentId)
    {
        $document = Productfile::find($documentId);
        return Storage::download($document->url);
    }

    public function deleteDocument($documentId)
    {
        $document = Productfile::find($documentId);
        Storage::delete($document->url);
        $document->delete();

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
                    $imageName = "/assets/dashboard/images/products/" . Str::random(25) . '.png';
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
