<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $guarded = [];

    protected $table = 'category';

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    public function parent() {
        return $this->belongsTo(self::class, 'parent_id');
    }
    public function children() {
        return $this->hasMany(self::class, 'parent_id','id');
    }
}
