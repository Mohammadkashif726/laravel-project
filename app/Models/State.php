<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=['id',
        'name',
        'slug',
        'active',
        'country_id' //Relation
    ];

    public function institute(){
        return $this->hasMany('App\Models\Institute_branch','state_id');
    }

    public function country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function cities(){
        return $this->hasMany('App\Models\City', 'state_id');
    }
}