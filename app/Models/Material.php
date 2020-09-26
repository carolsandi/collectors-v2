<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description', 'image'
    ];

    public function requests() : HasMany
    {
        return $this->hasMany('App\Models\RequestMaterial');
    }
}
