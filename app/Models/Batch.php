<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Batch extends Model
{
    use HasSlug;
    public $table = 'batches';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    const BATCH_PUBLISH = 'publish';
    const BATCH_DRAFT= 'draft';

    public $fillable = [
        'owner_id',
        'title',
        'slug',
        'invite_code',
        'short_description',
        'meta_description',
        'batch_content',
        'will_learn',
        'featured_image',
        'status',
        'good_for',
        'requirements',
        'is_featured',
        'class_days',
        'feeType',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'owner_id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'invite_code' => 'string',
        'short_description' => 'string',
        'meta_description' => 'string',
        'batch_content' => 'string',
        'will_learn' => 'string',
        'featured_image' => 'string',
        'status' => 'string',
        'feeType' => 'string',
        'good_for' => 'string',
        'requirements' => 'string',
        'class_days' => 'string',
        'is_featured' => 'boolean',
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

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subjects');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function host() {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function students(){
        return $this->belongsToMany(User::class, 'batch_user')->withPivot('is_user_authorize');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function orders()
    {
        return $this->belongsToMany('\App\Models\Order', 'batch_order', 'batch_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function announcements()
    {
        return $this->hasMany('\App\Models\Announcement');
    }

    public function libraries()
    {
        return $this->hasMany('\App\Models\Library');
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

    public function groups()
    {
        return $this->hasMany(BatchGroups::class, 'batch_id');
    }

    public function syllabusTopics()
    {
        return $this->hasMany(SyllabusTopic::class, 'batch_id');
    }
}
