<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    //

    const DRAFT = 1;
    const PENDING_PAYMENT = 2;
    const ON_HOLD = 3;
    const COMPLETED = 4;
    const CANCELLED = 5;
    const DECLINED = 6;
    const PROCESSING = 7;

    public function order()
    {
        $this->hasOne(Order::class);
    }
}
