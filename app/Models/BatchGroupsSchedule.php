<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchGroupsSchedule extends Model
{
    protected $table = 'batch_groups_schedules';
    use HasFactory;

    public function batches()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function groups()
    {
        return $this->belongsTo(BatchGroups::class, 'batch_group_id');
    }
}
