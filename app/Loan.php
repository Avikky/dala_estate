<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class Loan extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'firstname', 'lastname','middlename', 'email', 'phone', 'address', 'amount', 'status', 'dob', 'gender', 'bvn', 'id_card', 'photo', 'interest', 'purpose', 'nature', 'location', 'experience', 'repayment', 'security'
    ];

    protected $dates = [
        'deleted_at', 
    ];
}
