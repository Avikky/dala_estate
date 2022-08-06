<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Branch extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'address', 'phone', 'email'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
