<?php

namespace App\Models;

use App\Models\Institute;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function institute() {
        return $this->belongsTo(Institute::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
