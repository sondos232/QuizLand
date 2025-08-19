<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions for {{ $quiz->title }}</title>
</head>
<body>
    <h1>Questions for {{ $quiz->title }}</h1>
    <a href="{{ route('questions.create', $quiz->id) }}">Add New Question</a>
    <ul>
        @foreach ($questions as $question)
            <li>{{ $question->question_text }} - Difficulty: {{ $question->difficulty }}</li>
        @endforeach
    </ul>

    <a href="{{ route('quizzes.index') }}">Back to Quizzes</a>
</body>
</html>
