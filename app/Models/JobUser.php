<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    protected $table = "job_user";

    protected $fillable = [
        'id',
        'job_id',
        'user_id'
    ];

    public function resume(){
        return $this->belongsTo(Resume::class);
    }
}
