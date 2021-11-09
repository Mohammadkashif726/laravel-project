<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Video
 * @package App\Models
 * @version August 20, 2018, 9:41 am UTC
 *
 * @property \App\Models\Tutor tutor
 * @property \Illuminate\Database\Eloquent\Collection tutorExperiences
 * @property integer tutor_id
 * @property string title
 * @property string description
 */
class Video extends Model
{
//    use SoftDeletes;

    public $table = 'videos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tutor_id',
        'uid',
        'title',
        'file_name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uid' => 'string',
        'tutor_id' => 'integer',
        'file_name' => 'string',
        'title' => 'string',
        'description' => 'string'
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tutor()
    {
        return $this->belongsTo(\App\Models\Tutor::class);
    }
}
