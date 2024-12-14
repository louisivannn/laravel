<?php
namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create()
    {
        $userFeedback = Feedback::where('user_id', Auth::id())->get();
        return view('feedback-form', compact('userFeedback'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string|max:255',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'content' => $request->feedback,
        ]);

        return redirect()->route('feedback.create')->with('success', 'Feedback submitted successfully!');
    }
}
