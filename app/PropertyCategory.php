<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function property()
    {
        return $this->hasOne(Property::class, 'property_categories_id');
    }
}
