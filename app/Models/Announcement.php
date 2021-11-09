<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    const COURSE = 'COURSE';
    const EVENT = 'EVENT';
    const BATCH = 'BATCH';
    const GENERAL = 'GENERAL';

    use HasSlug;
    public $table = 'announcements';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    protected $fillable=[
        'id',
        'title',
        'slug',
        'description',
        'type',
        'status',
        'is_featured',
        'owner_id',
        'batch_id',
        'subject_id',
    ];

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

    public function course() {
        return $this->belongsTo('\App\Models\Course', 'course_id');
    }

    public function event() {
        return $this->belongsTo('\App\Models\Event', 'event_id');
    }

    public function batch() {
        return $this->belongsTo('\App\Models\Batch', 'batch_id');
    }

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
