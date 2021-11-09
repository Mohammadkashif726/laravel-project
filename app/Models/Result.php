<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'quiz_id',
        'user_id',
        'percentage',
        'correct_answers',
        'wrong_answers',
        'reference_no',
    ];

    public function quiz(){
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }
}
