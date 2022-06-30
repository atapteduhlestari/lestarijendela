<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    protected $profile;

    public function __construct()
    {
        $this->profile = Profile::first();
    }

    public function index()
    {
        $profiles = Profile::get();
        return view('dashboard.profile.index', compact('profiles'));
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
            'name' => 'required',
            'email' => 'required|email:rfc',
            'no_tlp' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        if ($this->profile)
            return redirect()->back()->with('warning', 'Profile Exists!');

        Profile::create($data);
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
    public function edit(Profile $profile)
    {
        return view('dashboard.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc',
            'no_tlp' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        $profile->update($data);

        return redirect()->back()->with('success', 'Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->back()->with('success', 'Success!');
    }
}
