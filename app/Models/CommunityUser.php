<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CommunityUser extends Model
{
    protected $fillable = ['community_id', 'user_id'];
    protected $guarded = [];
    protected $table="community_user";

    public function Users(){
        return $this->belongsToMany(User::class, 'users', 'user_id');
    }
}
