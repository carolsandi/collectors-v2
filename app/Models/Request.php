<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'collector_id', 'start_time', 'end_time', 'start_latitude', 'start_longitude', 'end_latitude', 'end_longitude', 'status', 'price'
    ];

    public function collector() : BelongsTo
    {
        return $this->belongsTo('App\Models\Collector');
    }

    public function materials() : HasMany
    {
        return $this->hasMany('App\Models\RequestMaterial');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
}
