<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    protected $fillable = [
        'user_id',
        'quiz_id',
        'score',  
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // كل محاولة إجابة تخص مستخدم واحد
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class); // كل محاولة إجابة تخص كويز واحد
    }

    public function studentAnswers()
    {
        return $this->hasMany(StudentAnswer::class); // كل محاولة إجابة يمكن أن تحتوي على العديد من الإجابات من الطلاب
    }

    public function calculateScore()
    {
        $correctAnswers = $this->studentAnswers()->whereHas('answer', function ($query) {
            $query->where('is_correct', true);
        })->count();

        return $correctAnswers;
    }

}
