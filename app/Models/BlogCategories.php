<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'featured_image'];
    protected $guarded = [];

    public function BlogPosts(){
        return $this->belongsToMany(BlogPosts::class, 'blog_categories_blog_posts');
    }
}