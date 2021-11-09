<?php

namespace App\Models;
use App\Models\TutorialSubCategory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tutorials extends Model
{
    //
    use HasSlug;

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

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

    public function sub_category() {
        return $this->belongsTo(TutorialSubCategory::class, 'sub_category_id');
    }

    public function course() {
        return $this->belongsTo('\App\Models\Course', 'course_id');
    }

    public function tutorialGroup(){
        return $this->belongsTo('App\Models\TutorialGroup');
    }
}
