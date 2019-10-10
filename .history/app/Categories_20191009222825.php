<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public function parent() {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    // Each category may have multiple children
    public function children() {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Products::class,'category_id','id'); // This only gets the products of the CURRENT category
    }


}
