<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function collectors() : HasMany
    {
        return $this->hasMany('App\Models\Collector');
    }

    public function rates() : HasMany
    {
        return $this->hasMany('App\Models\Rate');
    }
}
