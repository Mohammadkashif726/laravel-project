<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DegreeLevel extends Model
{

    protected $fillable = [ 'id', 'title', 'is_deleted'];
    protected $table = 'degrees_levels';

    public function degrees(){
        return $this->hasMany('App\Models\DegreesList', 'degree_level_id');
    }

    public function state(){
        return $this->hasMany('App\Models\Degrees_list','degree_level_id');
    }
}
