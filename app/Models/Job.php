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

class Job extends Model
{
    //
    use HasSlug;

    protected $fillable = [
        'user_id',
        'currency_id',
        'employment_type_id',
        'contract_type_id',
        'seniority_level_id',
        'industry_id',
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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }

    public function employmentType(){
        return $this->belongsTo(EmploymentType::class);
    }

    public function contractType(){
        return $this->belongsTo(ContractType::class);
    }

    public function seniorityLevel(){
        return $this->belongsTo(SeniorityLevel::class);
    }

    public function industry(){
        return $this->belongsTo(Industry::class);
    }

    public function jobStatus(){
        return $this->belongsTo(JobStatus::class);
    }

    public function publisher(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
