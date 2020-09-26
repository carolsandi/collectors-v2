<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestMaterial extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'request_id', 'material_id', 'kg', 'notes', 'image'
    ];
}
