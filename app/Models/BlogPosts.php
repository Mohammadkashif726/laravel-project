<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPosts extends Model
{
    public $table = 'blog_posts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'tutor_id',
        'title',
        'slug',
        'short_description',
        'meta_description',
        'post_content',
        'featured_image',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tutor_id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'short_description' => 'string',
        'meta_description' => 'string',
        'post_content' => 'string',
        'featured_image' => 'string',
        'status' => 'string'
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

    public function BlogCategories(){
        return $this->belongsToMany(BlogCategories::class, 'blog_categories_blog_posts');
    }

    // Category.php
    public function BlogPosts(){
        return $this->hasMany(BlogPosts::class);
    }
}
