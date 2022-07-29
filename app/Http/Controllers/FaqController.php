<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();



        return view('dashboard.faq.index_faq', compact('faqs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = $request->all();

        Faq::create($data);

        return redirect()->back()->with('success', 'Berhasil!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Faq $faq)
    {


        return view('dashboard.faq.edit_faq', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $data = $request->all();

        $faq->update($data);
        return redirect('faq')->with('success', 'Berhasil diedit');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
