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
        $categories=DB::select('select distinct id, name, parent_id
        from categories
         group by id');

        return view('frontend.products')->with([
            'categories' => Categories::findOrFail($id),
            'activecategories' => Categories::first(),
           'allcategories' => $categories,
            'allProducts' => Products::get(),

        ]);
    }


}
