<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::get();
     
      
       
        return view('dashboard.feedback.index', compact('feedbacks'));
    }

    public function detailFeedback($id)
    {
        $feedback = Feedback::find($id);
       
        return view('dashboard.feedback.detail', compact('feedback'));
    }

    public function deleteFeedback($id)
    {
        $feedback = Feedback::find($id);   
       
        $feedback->delete();
        return redirect()->back()->with('success', 'Success!');
    }

    public function saveStatus(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->update(['status' => 1]);

        return redirect()->back();

        
    }
}
