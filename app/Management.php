<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Management extends Model
{
    
    protected $table = 'managements';
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'post', 'image', 'description', 'slug'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
