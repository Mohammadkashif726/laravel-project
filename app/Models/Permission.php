<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permission
 * @package App\Models
 * @version October 31, 2018, 2:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection blogCategoriesBlogPosts
 * @property \Illuminate\Database\Eloquent\Collection tutorExperiences
 * @property string name
 * @property string slug
 * @property string description
 * @property string for
 */
class Permission extends Model
{
//    use SoftDeletes;

    public $table = 'permissions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'slug',
        'description',
        'for'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'for' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
