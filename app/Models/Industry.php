<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    //

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
