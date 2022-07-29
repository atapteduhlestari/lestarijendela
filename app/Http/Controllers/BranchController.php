<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sbu;

class BranchController extends Controller
{

    public function index()
    {
        $branchs =  Sbu::get();

        return view('dashboard.branch.index', compact('branchs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sbu' => 'required',
        ]);

        $data = [
            'nama_sbu' => $request->nama_sbu,
            'alamat' => $request->alamat
        ];

        Sbu::create($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Sbu $branch)
    {
        return view('dashboard.branch.edit', compact('branch'));
    }

    public function update(Request $request, Sbu $branch)
    {

        $data = $request->all();

        $branch->update($data);
        return redirect()->back()->with('success', 'Success!');
    }

    public function destroy(Sbu $branch)
    {
        $branch->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
