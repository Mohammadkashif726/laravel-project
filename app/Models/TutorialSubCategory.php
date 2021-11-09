<?php

namespace App\Models;

use App\Models\Tutorials;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class TutorialSubCategory extends Model
{
    use HasSlug;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'sub_heading',
        'short_desc',
        'overview',
        'thumbnail',
        'meta_desc',
        'keywords'
    ];
    protected $guarded = [];

    protected $table="tutorial_sub_categories";

    public function tutorial_category(){
        return $this->belongsTo(TutorialCategory::class, 'category_id');
    }

    public function courses(){
        return $this->hasMany(Course::class, 'sub_category_id');
    }

    public function tutorial() {
        return $this->belongsToMany(Tutorials::class);
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
}
