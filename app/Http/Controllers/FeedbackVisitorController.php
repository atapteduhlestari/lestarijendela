<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;


use App\Notifications\NewFeedbackNotification;

class FeedbackVisitorController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'description' => 'required'
            ],
        );

        $data = $request->all();
        Feedback::create($data);
        return redirect()->back()->with('success', 'Message send. Thank you');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
