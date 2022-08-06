<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    
    protected $table = 'testimonials';
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'post', 'image', 'description'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
