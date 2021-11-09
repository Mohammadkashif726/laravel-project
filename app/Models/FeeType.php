<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeType extends Model
{
    protected $table = "tutor_fee_types";

    protected $fillable = [
        'id',
        'name',
        'active'
    ];
}
