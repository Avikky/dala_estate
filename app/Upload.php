<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Upload extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'title', 'file_path'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
