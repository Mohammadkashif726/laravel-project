<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutorialCategory extends Model
{
    protected $fillable = [
        'id',
        'name',
        'designation',
        'slug',
        'sub_heading',
        'short_desc',
        'overview',
        'thumbnail',
        'meta_desc',
        'keywords'
    ];
    protected $guarded = [];

    protected $table="tutorial_categories";

    public function TutorialSubCategory(){
        return $this->hasMany(TutorialSubCategory::class, 'category_id');
    }
}
