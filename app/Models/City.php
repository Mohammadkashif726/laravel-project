<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
        'id',
    'name',
    'country_id', //relation
];

    protected $table="cities";

    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function experience(){
        return $this->belongsToMany('App\Models\Experience', 'experience_id');
    }
    public function cityexperience(){
        return $this->hasMany('App\Models\CityExperience', 'experience_id');
    }
    public function tours(){
        return $this->hasMany('App\Models\Tours', 'tours_id');
    }
}