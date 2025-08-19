<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuizAttemptController;
use App\Http\Controllers\StudentAnswerController;
use App\Http\Controllers\HomeController;

// Main Landing Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('quizzes', QuizController::class);
Route::resource('quizzes.questions', QuestionController::class);
Route::resource('questions.answers', AnswerController::class);
Route::resource('quizzes.quiz_attempts', QuizAttemptController::class);
Route::resource('quiz_attempts.student_answers', StudentAnswerController::class);
Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
