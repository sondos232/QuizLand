<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attempts for {{ $quiz->title }}</title>
</head>

<body>
    <h1>Attempts for {{ $quiz->title }}</h1>
    <ul>
        @foreach ($quizAttempts as $attempt)
            <li>Attempted by User: {{ $attempt->user->username }} - Score: {{ $attempt->score }}</li>
        @endforeach
    </ul>

    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>

</html>