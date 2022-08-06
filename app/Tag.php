<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
	use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'slug'
    ];

    protected $dates = [
        'deleted_at', 
    ];

    public function getRouteKeyName()
    {
    	return 'title';
    }
}
