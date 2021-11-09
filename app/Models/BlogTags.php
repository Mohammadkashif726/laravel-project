<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
    protected $fillable = ['title', 'slug', 'description'];
    protected $guarded = [];
}
