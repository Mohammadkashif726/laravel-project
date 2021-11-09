<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCategories extends Model
{
    public $table = 'event_categories';
    protected $fillable = ['id', 'title', 'slug', 'description', 'featured_image'];
    protected $guarded = [];

    public function Events(){
        return $this->belongsToMany(Event::class, 'events');
    }

    public function Users(){
        return $this->belongsToMany(User::class, 'community_user', 'community_id');
    }
}
