<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'answer',
        'is_correct',
        'question_id',
    ];


    public function question() {
        return $this->hasMany(QuizQuestion::class, 'question_id');
    }
}
