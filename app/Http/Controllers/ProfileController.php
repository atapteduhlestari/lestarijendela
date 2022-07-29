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

    public function create()
    {
        //
    }

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

    public function show($id)
    {
        //
    }

    public function edit(Profile $profile)
    {
        return view('dashboard.profile.edit', compact('profile'));
    }

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

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->back()->with('success', 'Success!');
    }
}
