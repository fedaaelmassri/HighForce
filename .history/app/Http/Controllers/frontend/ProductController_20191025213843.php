<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands;
use App\Products;
use App\Categories;
use Storage;

class ProductController extends Controller
{
    //
    public  function index(){
        // return view('frontend.products')->with([
        //     'brands' => Brands::get(),
        //     'categories' => Categories::get(),
        //     'products' => Products::get(),



        // ]);
    }
    public function viewById($id)
    {
        // $services = Services::find($id);
        return view('frontend.products')->with([
            'categories' => Categories::findOrFail($id),
            'activecategories' => Categories::first(),
           'allcategories' => Categories::get(),
            'allProducts' => Products::get(),

        ]);
    }


}
