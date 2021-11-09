<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['title', 'file_name', 'user_id', 'is_active'];

    public function user() {
        return $this->hasOne(User::class);
    }
}
