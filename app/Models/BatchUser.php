<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BatchUser extends Model
{
    protected $table = 'batch_user';

    protected $fillable = ['batch_id', 'order_id', 'user_id', 'group_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
    public function group()
    {
        return $this->belongsTo(BatchGroups::class, 'group_id');
    }
}
