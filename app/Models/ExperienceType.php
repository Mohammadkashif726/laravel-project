<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceType extends Model
{
    protected $table = "experience_types";

    protected $fillable = [
        'id',
        'type',
        'is_deleted'
    ];
}