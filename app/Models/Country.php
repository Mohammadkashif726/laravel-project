<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable=['id', 'code', 'name','phone_code'];

//    public function Institute_branch(){
//        return $this->hasMany('App\Models\Institute_branch','country_id');
//    }

    public function states(){
        return $this->hasMany('App\Models\State','country_id');
    }
}