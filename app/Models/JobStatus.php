<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

class JobStatus extends Model
{
    const STUDENT = 1;
    const TUTOR = 2;
    const INSTITUTE = 3;
    const SUPER_ADMIN = '4';
    const ACTIVE = '1';
    const NOT_ACTIVE = '0';
    const DELETED = '1';
    const NOT_DELETED = '0';
    const VERIFIED = 'VERIFIED';

    const Draft = 1;
    const Open = 2;
    const Close = 3;
    const OnHold = 4;
    const Filled = 5;
    const Closed = 6;

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
