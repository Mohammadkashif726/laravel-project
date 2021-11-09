<?php

namespace App\Models;

use App\Models\Order;
use App\Models\TutorialSubCategory;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasSlug;

    public function language () {
        return $this->belongsTo('App\Models\Language');
    }

    public function subCategory() {
        return $this->belongsTo(TutorialSubCategory::class);
    }

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

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function orders()
    {
        return $this->hasMany('\App\Models\Order');
    }

    public function tutorials()
    {
        return $this->hasMany(\App\Models\Tutorials::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function tutorialGroup()
    {
        return $this->hasMany('App\Models\TutorialGroup')->orderBy('sort_index');
    }

    public function announcements() {
        return $this->hasMany('\App\Models\Announcement');
    }
}
