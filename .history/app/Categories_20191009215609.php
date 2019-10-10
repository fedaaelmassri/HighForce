<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public function parent() {
        return $this->belongsToOne(Categories::class, 'parent_id');
    }

    // Each category may have multiple children
    public function children() {
        return $this->hasMany(Categories::class, 'parent_id');
    }

}
