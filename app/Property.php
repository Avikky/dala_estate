<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

   protected $fillable = [
         'property_categories_id', 'property_uses_id', 'name', 'slug', 'description', 'location', 'minimum_price', 'maximum_price', 'image'
    ];

    public function propertycategory()
    {
        return $this->belongsTo(PropertyCategory::class, 'property_categories_id');
    }

    public function propertyuses()
    {
        return $this->belongsTo(PropertyUses::class, 'property_uses_id');
    }
}
