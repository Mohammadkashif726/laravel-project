<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TutorSubject
 * @package App\Models
 * @version August 10, 2018, 6:32 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection tutorExperiences
 * @property integer tutor_id
 * @property integer subject_id
 * @property integer subject_category_id
 */
class TutorSubject extends Model
{
    use SoftDeletes;

    public $table = 'tutor_subjects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tutor_id',
        'subject_id',
        'subject_category_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tutor_id' => 'integer',
        'subject_id' => 'integer',
        'subject_category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function tutor(){
        return $this->belongsToMany('App\Models\Tutor')->withPivot('subject_category_id');
    }
}
