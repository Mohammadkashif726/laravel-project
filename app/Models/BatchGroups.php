<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchGroups extends Model
{
    protected $table = 'batch_groups';
    use HasFactory;

    public function batches()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function schedules()
    {
        return $this->hasMany(BatchGroupsSchedule::class, 'batch_group_id');
    }
}
