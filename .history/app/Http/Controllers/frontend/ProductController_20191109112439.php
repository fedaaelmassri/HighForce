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
        $products=DB::table('products')->get();
        return view('frontend.products')->with([
            'brands' => Brands::get(),
            'categories' => Categories::get(),
            'products' => $products,


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
    $products= Products::where('category_id','=', $id)->paginate(2);
    return view('frontend.productsByCat')->with([
     //   'allProducts' => Products::get(),
     'products' =>$products,
     'brands' => Brands::get(),
     'categories' => Categories::get(),
    ]);


}

public function viewByBraAndCat($cid=null,$bid)
{
    if($cid==null){
        $products= Products::where('brand_id', $bid)->paginate(10);
    }
    else{
    $products=  DB::table('products')->where('category_id','=', $cid)
    ->andWhere('brand_id', $bid)
    ->paginate(10);
    }
    return view('frontend.productsByBraCat')->with([
      'products' =>$products,
     'brands' => Brands::get(),
     'categories' => Categories::get(),
    ]);


}
}
