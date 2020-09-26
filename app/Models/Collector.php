<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collector extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'zone_id', 'plate', 'rating', 'active'
    ];

    public function requests() : HasMany
    {
        return $this->hasMany('App\Models\Request');
    }

    public function schedule() : HasMany
    {
        return $this->hasMany('App\Models\CollectorSchedule');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    public function zone() : BelongsTo
    {
        return $this->belongsTo('App\Models\Zone');
    }
}
