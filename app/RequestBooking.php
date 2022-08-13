<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestBooking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'phone', 'email', 'message', 'property'
    ];
}
