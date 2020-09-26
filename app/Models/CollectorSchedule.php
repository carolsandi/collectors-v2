<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollectorSchedule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'collector_id', 'day', 'start_time', 'end_time'
    ];

    public function collector() : BelongsTo
    {
        return $this->belongsTo('App\Models\Collector');
    }
}
