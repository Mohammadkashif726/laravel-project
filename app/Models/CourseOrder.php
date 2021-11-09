<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class CourseOrder extends Model
{
    protected $table = 'course_order';

    protected $fillable = ['order_id', 'course_id', 'quantity'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
