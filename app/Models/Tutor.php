<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tutor
 * @package App\Models
 * @version July 27, 2018, 1:59 pm UTC
 */
class Tutor extends Model
{
    use SoftDeletes;

    public $table = 'tutors';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'cnic',
        'map_url',
        'website_url',
        'hourly_rate',
        'monthly_rate',
        'intro_clip',
        'is_active',
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
        'cnic' => 'string',
        'map_url' => 'string',
        'website_url' => 'string',
        'hourly_rate' => 'integer',
        'monthly_rate' => 'integer',
        'intro_clip' => 'string',

        'is_active' => 'boolean',
        'is_deleted' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function subjects(){
        return $this->belongsToMany('App\Models\Subject')->withPivot('subject_category_id')->withTimestamps();
    }

    public function subjectCategories(){
        return $this->belongsToMany('App\Models\SubjectCategory');
    }

    public function videos(){
        return $this->hasMany('App\Models\Video');
    }
}
