<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'file_path', 'description', 'slug', 
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
