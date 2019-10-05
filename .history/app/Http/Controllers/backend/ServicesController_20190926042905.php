<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services;
class ServicesController extends Controller
{
        //

    protected $table = 'services';
    protected $fillable = ['name', 'image', 'description'];

}
