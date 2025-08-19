@extends('layouts.app')

@section('content')

    <div class="container text-center my-5">
        <h1 class="display-3">Welcome to QuizLand!</h1>
        <p class="lead">A fun and educational platform for all kinds of quizzes!</p>
        <p>Get started by logging in or registering to track your scores, take quizzes, and more!</p>

        <div class="d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-3">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-lg mx-3">Register</a>
        </div>
    </div>

    <!-- Footer (Optional) -->
    <footer class="text-center py-4">
        <p>© {{ date('Y') }} QuizLand. All rights reserved.</p>
    </footer>

@endsection