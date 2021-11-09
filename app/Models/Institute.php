<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Institute
 * @package App\Models
 * @version July 27, 2018, 4:02 pm UTC
 *
 * @property \App\Models\Country country
 * @property \Illuminate\Database\Eloquent\Collection tutorExperience
 * @property \Illuminate\Database\Eloquent\Collection UserQualification
 * @property string name
 * @property integer country_id
 * @property boolean is_deleted
 */
class Institute extends Model
{
//    use SoftDeletes;

    public $table = 'institutes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'country_id',
        'is_deleted'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'country_id' => 'integer',
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
        return $this->belongsToMany(\App\Models\Country::class);
    }

    public function states()
    {
        return $this->belongsToMany(\App\Models\State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function userQualifications()
    {
        return $this->hasMany(\App\Models\UserQualification::class);
    }

    public function institute_type() {
        return $this->belongsTo(InstituteType::class, 'type_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
