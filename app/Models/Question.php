<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    const COURSE = 'COURSE';
    const BATCH = 'BATCH';
    const GENERAL = 'GENERAL';

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function batch() {
        return $this->belongsTo(Batch::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
