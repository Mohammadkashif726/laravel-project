<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserExperience
 * @package App\Models
 * @version August 1, 2018, 12:26 pm UTC
 *
 * @property \App\Models\ExperienceType experienceType
 * @property \App\Models\Tutor tutor
 * @property integer tutor_id
 * @property integer experience_type_id
 * @property integer company_id
 * @property integer institute_id
 * @property string from_year
 * @property string to_year
 * @property string from_month
 * @property string to_month
 * @property string tagline
 * @property string description
 * @property boolean is_currently_work
 * @property boolean is_deleted
 */
class UserExperience extends Model
{
//    use SoftDeletes;

    public $table = 'user_experiences';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const IS_CURRENTLY_WORK = 0;
    const IS_DELETED = 0;

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'experience_type_id',
        'name',
        // 'company_id',
        // 'institute_id',
        'from_year',
        'to_year',
        'from_month',
        'to_month',
        'tagline',
        'description',
        'is_currently_work',
        'is_deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'experience_type_id' => 'integer',
        'name' => 'string',
        // 'company_id' => 'integer',
        // 'institute_id' => 'integer',
        'from_year' => 'string',
        'to_year' => 'string',
        'from_month' => 'string',
        'to_month' => 'string',
        'tagline' => 'string',
        'description' => 'string',
        'is_currently_work' => 'boolean',
        'is_deleted' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function experienceType()
    {
        return $this->belongsTo(ExperienceType::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function institute(){
        return $this->belongsTo('App\Models\Institute','institute_id');
    }
}
