<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_list extends Model
{
    protected $fillable=['id',
    'name',
    'country_id', //relation
    'state_id', //relation
    'city_id',//relation
    'area_id', //relation
    'is_deleted'
];

    protected $table="tbl_company_list";

    public function Country(){
        return $this->belongsTo('App\Models\Country','country_id');
    }
    public function State(){
        return $this->belongsTo('App\Models\State','state_id');
    }
    public function City(){
        return $this->belongsTo('App\Models\City','city_id');
    }

}