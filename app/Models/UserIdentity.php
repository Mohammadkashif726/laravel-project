<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIdentity extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'fill_name',
        'is_host',
    ];
    public function tours(){
        return $this->hasOne('App\Models\Tours', 'tours_id');
    }
}
