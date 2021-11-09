<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    //
    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
