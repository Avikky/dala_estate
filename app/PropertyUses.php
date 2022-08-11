<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyUses extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'description'
    ];
}
