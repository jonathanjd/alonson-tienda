<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'category' => 'App\Category',
    'product' => 'App\Product',
]);

class Image extends Model
{

    protected $fillable = ['name', 'alt', 'path', 'morphic_type', 'morphic_id'];

    //
    public function morphic()
    {
        # code...
        return $this->morphTo();
    }
}
