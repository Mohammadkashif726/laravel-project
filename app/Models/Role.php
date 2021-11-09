<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version October 31, 2018, 12:02 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection blogCategoriesBlogPosts
 * @property \Illuminate\Database\Eloquent\Collection tutorExperiences
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string role
 */
class Role extends Model
{
//    use SoftDeletes;

    public $table = 'roles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }

    public function permissions(){
        return $this->belongsToMany('App\Models\Permission')->withTimestamps();
    }

}
