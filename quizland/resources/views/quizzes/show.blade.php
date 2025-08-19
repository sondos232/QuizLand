<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->title }}</title>
</head>
<body>
    <h1>{{ $quiz->title }}</h1>
    <p>{{ $quiz->description }}</p>

    <h2>Questions</h2>
    <ul>
        @foreach ($quiz->questions as $question)
            <li>{{ $question->question_text }} - Difficulty: {{ $question->difficulty }}</li>
        @endforeach
    </ul>

    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>
</html>
