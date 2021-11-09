<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;
use App\Models\Tutorials;

class TutorialGroup extends Model
{
    //

    public function tutorials() {
        return $this->hasMany(Tutorials::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
