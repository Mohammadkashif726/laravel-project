<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['id', 'name', 'slug'];
    protected $guarded = [];

    public function category(){
        return $this->belongsToMany('App\Models\SubjectCategory', 'subject_categories');
    }

    public function tutor(){
        return $this->belongsToMany('App\Models\Tutor');
    }
}
