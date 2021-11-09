<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable=['id',
    'name',
    'city_id' //relation
];

    protected $table="areas";

    public function City(){
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function state(){
        return $this->belongsTo('App\Models\State','state_id');
    }

    public function institute(){
        return $this->hasMany('App\Models\Institute');
    }
}