<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'experience_id',
        'city_id',
    ];
    public function city(){
        return $this->belongsTo('App\Models\City', 'city_id');
    }
    public function experience(){
        return $this->belongsTo('App\Models\Experience', 'experience_id');
    }
}
