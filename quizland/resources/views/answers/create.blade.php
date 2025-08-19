<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Answer</title>
</head>
<body>
    <h1>Create Answer for "{{ $question->question_text }}"</h1>
    <form action="{{ route('answers.store', $question->id) }}" method="POST">
        @csrf
        <label for="answer_text">Answer Text</label>
        <input type="text" id="answer_text" name="answer_text" required>

        <label for="is_correct">Is Correct?</label>
        <input type="checkbox" id="is_correct" name="is_correct" value="1">

        <button type="submit">Add Answer</button>
    </form>

    <a href="{{ route('answers.index', $question->id) }}">Back to Answers</a>
</body>
</html>
