<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Answers for Quiz Attempt</title>
</head>
<body>
    <h1>Student Answers for Quiz Attempt</h1>
    <ul>
        @foreach ($studentAnswers as $studentAnswer)
            <li>Question: {{ $studentAnswer->question->question_text }} - Answer: {{ $studentAnswer->answer->answer_text }} - Correct: {{ $studentAnswer->answer->is_correct ? 'Yes' : 'No' }}</li>
        @endforeach
    </ul>

    <a href="{{ route('quiz_attempts.index', $quizAttempt->quiz_id) }}">Back to Attempts</a>
</body>
</html>
