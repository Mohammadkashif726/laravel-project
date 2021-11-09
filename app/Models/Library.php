<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Library extends Model
{
    use HasSlug;
    public $table = 'libraries';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

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

    public function language() {
        return $this->belongsTo('\App\Models\Language', 'language_id');
    }

    public function subject() {
        return $this->belongsTo('\App\Models\Subject', 'subject_id');
    }

    public function batch() {
        return $this->belongsTo('\App\Models\Batch', 'batch_id');
    }

    public function user() {
        return $this->belongsTo('\App\Models\User', 'user_id');
    }

}
