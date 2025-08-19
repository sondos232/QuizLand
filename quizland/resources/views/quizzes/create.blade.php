<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
</head>
<body>
    <h1>Create New Quiz</h1>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <label for="title">Quiz Title</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Quiz Description</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Create Quiz</button>
    </form>
</body>
</html>
