<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=['id',
    'name',
    'slug',
    'active',
    'state_id' //relation
];

    protected $table="cities";

    public function State(){
        return $this->belongsTo('App\Models\State','state_id');
    }

    public function areas(){
        return $this->hasMany('App\Models\Area', 'city_id');
    }

    public function institute(){
        return $this->hasMany('App\Models\Institute', 'city_id');
    }

    public function job(){
        return $this->hasMany(Job::class);
    }
}