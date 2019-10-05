<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ECatalogues extends Model
{
    //
    protected $table = 'ecatalogues';
    protected $fillable = ['name', 'filepath','mimetype','size','downloads', 'description'];

}
