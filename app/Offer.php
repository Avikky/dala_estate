<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'slug', 'description', 'image'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
