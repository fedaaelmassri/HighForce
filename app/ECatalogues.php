<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ECatalogues extends Model
{
    //
    protected $table = 'ecatalogues';
    protected $fillable = ['name', 'description','image','filepath','mimetype','size','downloads'];

}
