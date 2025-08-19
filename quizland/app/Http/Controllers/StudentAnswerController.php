<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use App\Models\StudentAnswer;
use Illuminate\Http\Request;

class StudentAnswerController extends Controller
{
    public function index(QuizAttempt $quizAttempt)
    {
        $studentAnswers = $quizAttempt->studentAnswers; 
        return view('student_answers.index', compact('quizAttempt', 'studentAnswers'));
    }

    public function create(QuizAttempt $quizAttempt)
    {
        return view('student_answers.create', compact('quizAttempt'));
    }

    public function store(Request $request, QuizAttempt $quizAttempt)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'selected_answer' => 'required|exists:answers,id',
        ]);

        $quizAttempt->studentAnswers()->create([
            'question_id' => $request->question_id,
            'selected_answer' => $request->selected_answer,
        ]);

        return redirect()->route('student_answers.index', $quizAttempt);
    }
}
