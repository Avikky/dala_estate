<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'faq_cats_id', 'question', 'answer', 'slug', 'image'
    ];

    public function faqcat()
    {
        return $this->belongsTO(FaqCat::class,  'faq_cats_id');
    }
}
