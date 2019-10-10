<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public function parent() {
        return $this->belongsTo(Categories::class, 'parent_id','id');
    }

    // Each category may have multiple children
    public function children() {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Products::class,'category_id','id');
     }
     public function getCategories(){

        $categories=Categories::where('parent_id',0)->get();//united

        $categories=$this->addRelation($categories);

        return $categories;

    }


     protected function selectChild($id)
     {
         $categories=Categories::where('parent_id',$id)->get(); //rooney

         $categories=$this->addRelation($categories);

         return $categories;

     }

     protected function addRelation($categories){

        $categories->map(function ($item, $key) {

            $sub=$this->selectChild($item->id);

            return $item=array_add($item,'subCategory',$sub);

        });

        return $categories;
    }

}
