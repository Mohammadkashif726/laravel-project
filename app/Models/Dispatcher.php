<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispatcher extends Model
{
    protected $table = 'dispatcher';
    // Status
    const PENDING = 'PENDING';
    const SUCCESS = 'SUCCESS';
    const FAILED = 'FAILED';

    // Type
    const BATCH_ORDER_THANKS = 'BATCH_ORDER_THANKS';
    const REGISTER_SUCCESS = 'REGISTER_SUCCESS';

    // Entity
    const BATCH_ORDER = 'BATCH_ORDER'; // using order id
    const COURSE_ORDER = 'COURSE_ORDER'; // using order id
    const USER = 'USER'; // using user id

    protected $fillable = [
        'type',
        'status',
        'payload',
        'error',
        'entity_type',
        'entity_id'
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'entity_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'entity_id');
    }
}
