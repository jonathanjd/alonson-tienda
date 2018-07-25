<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $connection = 'mysql_ecommerce';

    protected $fillable = ['title', 'description', 'pricing', 'slug', 'seo_title', 'seo_keywords', 'seo_description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image()
    {
        # code...
        return $this->morphOne(Image::class, 'morphic');
    }

    public function category()
    {
        # code...
        return $this->belongsTo(Category::class);
    }
}
