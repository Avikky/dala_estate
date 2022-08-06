<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'status', 'property_id'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
