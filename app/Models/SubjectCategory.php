<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectCategory extends Model
{
    const IS_DELETED = 0;
    protected $table = 'subject_categories';
    protected $fillable = [
        'id',
        'parent_id',
        'name',
        'slug'
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject');
    }
}
