<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands;
use Storage;

class ProductController extends Controller
{
    //
    public  function Brands(){
        return view('frontend.products')->with([
            'brands' => Brands::get()

        ]);
    }
}
