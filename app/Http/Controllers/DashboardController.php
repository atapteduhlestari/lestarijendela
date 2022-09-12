<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profile($username)
    {

        if (!isSuperadmin() && auth()->user()->username != $username) {
            return redirect()->back()->with('warning', 'Access Forbidden!');
        }

        $user = User::firstWhere('username', $username);
        return view('auth.profile.index', compact('user'));
    }

    public function profileUpdate($username)
    {
        $data =  request()->all();
        $data['password'] = Hash::make(request('password'));

        User::firstWhere('username', $username)
            ->update($data);

        return redirect()->back()->with('success', 'Success!');
    }
}
