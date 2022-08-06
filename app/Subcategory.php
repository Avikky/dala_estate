<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
	use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'slug', 'parent'
    ];

    protected $dates = [
        'deleted_at', 
    ];

    public function getRouteKeyName()
    {
    	return 'title';
    }
}
