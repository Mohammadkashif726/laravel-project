<?php

namespace App\Models;

use App\Models\Institute;
use Illuminate\Database\Eloquent\Model;

class InstituteType extends Model
{
    public $table = 'institute_types';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'country_id',
        'is_deleted'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'city_id' => 'integer',
        'is_deleted' => 'boolean'
    ];

    public function institute(){
        $this->hasMany(Institute::class);
    }
}
