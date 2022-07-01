<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
