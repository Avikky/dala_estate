<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCat extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'slug'
    ];

    public function faq()
    {
        return $this->hasOne(Faq::class ,  'faq_cats_id');
    }
}
