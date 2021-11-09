<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    //
    protected $table = "profile_setting";

    const STUDENT = 'STUDENT';
    const TUTOR = 'TUTOR';

    protected $fillable = ['user_id', 'viewmode'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
