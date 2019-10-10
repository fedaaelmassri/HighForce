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
        return $this->hasMany(Categories::class, 'parent_id');
    }
    // recursive, loads all descendants
public function childrenRecursive()
{
   return $this->children()->with('childrenRecursive');
}


}
