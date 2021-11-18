<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
    ];
    public function city(){
        return $this->belongsToMany('App\Models\City', 'city_id');
    }
    public function cityexperience(){
        return $this->hasMany('App\Models\CityExperience', 'city_experiences_id');
    }
}
