<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('admin.feedback-list', compact('feedbacks'));
    }

    public function destroy($id)
    {
        try {
            Feedback::destroy($id);
            return redirect()->route('feedback-list')->with('success', 'Feedback deleted successfully!');
        } catch (\Exception $e){
            return redirect()->route('feedback-list')->with('error', 'Error deleting feedback. Please try again.');
        }
    }
}