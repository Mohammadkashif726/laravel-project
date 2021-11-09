<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Event extends Model
{
    use HasSlug;
    public $table = 'events';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'organiser_id',
        'category_id',
        'city_id',
        'title',
        'slug',
        'short_description',
        'meta_description',
        'event_content',
        'featured_image',
        'location_url',
        'status',
        'start_date_time',
        'end_date_time',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'organiser_id' => 'integer',
        'category_id' => 'integer',
        'city_id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'short_description' => 'string',
        'meta_description' => 'string',
        'event_content' => 'string',
        'featured_image' => 'string',
        'location_url' => 'string',
        'status' => 'string',
        'start_date_time' => 'datetime',
        'end_date_time' => 'datetime',
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

    public function EventCategories(){
        return $this->belongsToMany(EventCategories::class, 'event_categories');
    }

    public function category(){
        return $this->belongsTo(EventCategories::class, 'category_id');
    }

    public function host() {
        return $this->belongsTo(User::class, 'organiser_id');
    }

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function announcements() {
        return $this->hasMany('\App\Models\Announcement');
    }

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
