<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    use HasFactory;
    protected $fillable =[
        'type',
        'duration',
        'is_private',
        'owner_id',
        'city_id',
        'cover_photo',
        'per_person_price',
        'reasons_to_book',
    ];
    public function city(){
        return $this->belongsTo('App\Models\City', 'city_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\UserIdentity', 'user_identities_id');
    }
}
