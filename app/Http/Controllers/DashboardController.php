<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'products' => Product::count(),
            'projects' => Project::count(),
            'posts' => Post::count(),
        ];
        return view('dashboard.index', compact('count'));
    }

    public function profile($username)
    {
        if (!isSuperadmin() && auth()->user()->username != $username) return redirect()->back()->with('warning', 'Access Forbidden!');

        $user = User::firstWhere('username', $username);
        return view('auth.profile.index', compact('user'));
    }

    public function profileUpdate($username)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8'
        ]);

        $user = User::firstWhere('username', $username);

        if (!$user) return redirect()->back()->with('warning', 'User Not Found!');

        $data =  request()->only('password', 'email', 'name');

        if ($data['password']) $data['password'] = Hash::make(request('password'));
        else unset($data['password']);

        $user->update($data);
        return redirect()->back()->with('success', 'Success!');
    }
}
