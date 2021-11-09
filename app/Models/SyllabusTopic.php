<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyllabusTopic extends Model
{
    use HasFactory;

    protected $table = 'syllabus_topics';
    use HasFactory;

    public function batches()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function syllabusTopicLessons()
    {
        return $this->hasMany(SyllabusTopicLesson::class, 'syllabus_topic_id');
    }
}
