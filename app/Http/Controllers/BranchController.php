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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sbu $branch)
    {
        return view('dashboard.branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sbu $branch)
    {
      
        $data = $request->all();

        $branch->update($data);
        return redirect()->back()->with('success', 'Success!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sbu $branch)
    {
        $branch->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
