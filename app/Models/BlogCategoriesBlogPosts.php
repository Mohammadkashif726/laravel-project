<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class BlogCategoriesBlogPosts extends Model
{
    protected $fillable = ['blog_categories_id', 'blog_posts_id'];
    protected $guarded = [];

    public function BlogPosts(){
        return $this->belongsToMany(BlogPosts::class, 'blog_categories_blog_posts');
    }
}