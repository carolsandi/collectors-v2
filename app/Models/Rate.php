<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'zone_id', 'rate'
    ];

    public function zone() : BelongsTo
    {
        return $this->belongsTo('App\Models\Zone');
    }
}
