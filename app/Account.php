<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Account extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'lname', 'fname', 'mname', 'phone', 'email', 'dob', 'pob', 'address', 'next_of_kin', 'next_of_kin_phone', 'next_of_kin_address', 'gender', 'marital_status', 'clienttype', 'bvn', 'idtype', 'idnumber', 'idscan', 'photo', 'status'
    ];


    protected $dates = [
        'deleted_at', 
    ];
}