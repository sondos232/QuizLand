<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    public function index(Quiz $quiz)
    {
        $quizAttempts = $quiz->quizAttempts; 
        return view('quiz_attempts.index', compact('quiz', 'quizAttempts'));
    }

    public function create(Quiz $quiz)
    {
        return view('quiz_attempts.create', compact('quiz'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'score' => 'required|integer',
        ]);

        $quizAttempt = $quiz->quizAttempts()->create([
            'user_id' => auth()->id(),
            'score' => $request->score,
        ]);

        return redirect()->route('quiz_attempts.index', $quiz);
    }
}
