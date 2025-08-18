<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    public function quizAttempt()
    {
        return $this->belongsTo(QuizAttempt::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
