<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserQualification
 * @package App\Models
 * @version July 30, 2018, 10:26 am UTC
 *
 * @property \App\Models\Institute institute
 * @property \App\Models\Tutor tutor
 * @property \Illuminate\Database\Eloquent\Collection tutorExperience
 * @property integer tutor_id
 * @property integer institute_id
 * @property string degree_title
 * @property string degree_image
 * @property boolean is_deleted
 */
class UserQualification extends Model
{
//    use SoftDeletes;

    public $table = 'user_qualifications';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'country_id',
        'institute_id',
        'degree_level_id',
        'degree_id',
        'from_year',
        'to_year',
        'is_deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
        'user_id' => 'integer',
        'institute_id' => 'integer',
        'degree_level_id' => 'integer',
        'degree_id' => 'integer',
        'is_deleted' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }

    public function institute()
    {
        return $this->belongsTo(\App\Models\Institute::class);
    }

    public function degree()
    {
        return $this->belongsTo(\App\Models\DegreesList::class);
    }

    public function degreeLevel()
    {
        return $this->belongsTo(\App\Models\DegreeLevel::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
