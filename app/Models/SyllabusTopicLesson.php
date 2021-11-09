<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyllabusTopicLesson extends Model
{
    protected $table = 'syllabus_topic_lessons';
    use HasFactory;

    public function syllabusTopics() {
        return $this->belongsTo(SyllabusTopic::class, 'syllabus_topic_id');
    }
}
