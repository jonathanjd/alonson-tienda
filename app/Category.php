<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $connection = 'mysql_ecommerce';

    protected $fillable = ['title', 'slug', 'seo_title', 'seo_keywords', 'seo_description'];

    public function image()
    {
        # code...
        return $this->morphOne(Image::class, 'morphic');
    }
}