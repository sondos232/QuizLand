<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Question</title>
</head>

<body>
    <h1>Create Question for {{ $quiz->title }}</h1>
    <form action="{{ route('questions.store', $quiz->id) }}" method="POST">
        @csrf
        <label for="question_text">Question Text</label>
        <input type="text" id="question_text" name="question_text" required>

        <label for="difficulty">Difficulty</label>
        <select id="difficulty" name="difficulty">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
        </select>

        <button type="submit">Add Question</button>
    </form>

    <a href="{{ route('questions.index', $quiz->id) }}">Back to Questions</a>
</body>

</html>