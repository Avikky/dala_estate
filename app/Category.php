<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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

    public function Posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
