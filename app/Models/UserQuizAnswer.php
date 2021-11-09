<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuizAnswer extends Model
{
    public $table = 'user_quiz_answers';

    use HasFactory;

    public function question() {
        return $this->belongsTo(QuizQuestion::class, 'question_id');
    }
}
