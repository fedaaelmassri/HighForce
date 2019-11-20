<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\DB;
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
        dd(Products::paginate(10));
        exit;

        return view('frontend.products')->with([
            'brands' => Brands::get(),
            'categories' => Categories::get(),
            'products' => Products::paginate(10)



        ]);

    }
    public function getSupCat(){

        $categories=DB::select('select distinct id, name, parent_id
        from categories
         group by id');
         if($categories){
            return response()->json(['categories'=>$categories]);

         }
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

    public function viewByCat($id)
{
    $products= Products::where('category_id','=', $id)->simplePaginate(10);


if($products){
    // return response()->json(['products'=>$products]);

    return view('frontend.productsByCat')->with([
     //   'allProducts' => Products::get(),
     'products' =>$products,
     'brands' => Brands::get(),
     'categories' => Categories::get(),
    ]);
 }

}
}
