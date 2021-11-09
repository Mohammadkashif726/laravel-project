<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectSubjectCategory extends Model
{
    protected $table = 'subject_subject_category';
    public $timestamps = false;

    protected $fillable = ['subject_id', 'subject_category_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function subjectCategory()
    {
        return $this->belongsTo(SubjectCategory::class);
    }
}
