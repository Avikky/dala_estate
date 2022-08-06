<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'image', 'description', 'link', 'slug'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}