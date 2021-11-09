<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DegreesList extends Model
{
    protected $fillable = [
        'id',
        'title',
        'is_deleted',
        'degree_level_id'
    ];
    protected $table = 'degrees_list';

    public function degreeLevel(){
        return $this->belongsTo('App\Models\DegreeLevel','degree_level_id');
    }
}
