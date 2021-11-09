<?php

namespace App\Models;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Dispatcher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const COURSE = 'COURSE';
    const EVENT = 'EVENT';
    const BATCH = 'BATCH';

    protected $fillable = [
        'user_id',
        'billing_email',
        'billing_name',
        'billing_address',
        'billing_city',
        'billing_province',
        'billing_postalcode',
        'billing_phone',
        'billing_name_on_card',
        'billing_discount',
        'billing_discount_code',
        'billing_subtotal',
        'billing_tax',
        'billing_total',
        'payment_gateway',
        'error',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function batches() {
        return $this->belongsToMany(Batch::class);
    }

    public function paymentType(){
        return $this->belongsTo(PaymentType::class);
    }

    public function orderStatus(){
        return $this->belongsTo(OrderStatus::class);
    }

    public function dispatcher() {
        return $this->hasOne(Dispatcher::class, 'entity_id');
    }
}