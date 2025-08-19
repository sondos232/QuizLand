<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
</head>

<body>
    <h1>All Quizzes</h1>
    <a href="{{ route('quizzes.create') }}">Create New Quiz</a>
    <ul>
        @foreach ($quizzes as $quiz)
            <li>{{ $quiz->title }} - <a href="{{ route('quizzes.show', $quiz->id) }}">View Quiz</a></li>
        @endforeach
    </ul>
</body>

</html>