<?php

namespace App\Models;

use App\Models\City;
use App\Models\JobStatus;
use App\Models\User;
use App\Models\Currency;
use App\Models\EmploymentType;
use App\Models\ContractType;
use App\Models\SeniorityLevel;
use App\Models\Industry;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public $table = 'quizzes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    //
    use HasSlug;

    protected $fillable = [
        'id',
        'user_id',
        'slug',
        'description',
        'is_active',
        'pass_percentage',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function questions() {
        return $this->hasMany(QuizQuestion::class, 'quiz_id');
    }
}
