<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Brands;
use App\Categories;

class ProductsController extends Controller
{
    //
    public function index(){

        return view ('backend.Products.index')->with([
            'products' => Products::get()
            ]);


    }
    public function getSupCat($id){
        $categories=Categories::all()->where('parent_id', $id);
        if($categories){
            return response()->json(['categories'=>$categories]);

         }
        // else{
        //     return response()->json(['categories'=>'not found']);

        // }

    }

    public function create(){

        // $categories = DB::table('Categories')
        // ->orderByRaw('parent_id DESC')
        // ->get();
        $categories=Categories::with('children')
            ->where('parent_id',0)
             ->orderBy('parent_id', 'asc')
            ->get();


        // $categories=Categories::all()->where('parent_id', 0);
        $brands=Brands::all();

        return view ('backend.Products.addProduct')->with(['categories'=>$categories,'brands'=>$brands]);


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('brands', 'public');
        } else {

            $path = null;
        }

        $brands = new Brands();
        $brands->name = $request->input('name');
        $brands->description = $request->input('description');
        $brands ->image = $path;

        $brands->save();
        if ($brands->save()) {
            return redirect(route('admin.brands'))->with([
                'message' => sprintf('The Brand: "%s" add success !', $brands->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf('The Brand: "%s" can not add success !', $brands->name),
                'alert-type' => 'error'
            ])->withInput();
        }



    }

    public function delete($id)
    {
        $brands = Brands::findOrfail($id);

        if (!$brands) {
            return redirect()->back()->with([
                'message' => sprintf('The Brand can not found!'),
                'alert-type' => 'error'
            ]);
        }

        $brands->delete();
        return response()->json(['message' => sprintf('The Brand: "%s" deleted success !', $brands->name)]);
    }


    public function editBrand($id)
    {
        $brands = Brands::findOrfail($id);
        if (!$brands) {
            return redirect()->back()->with([
                'message' => sprintf('The Brand can not found!'),
                'alert-type' => 'error'
            ]);
        }

        return  view('backend.Brands.update', [
            'brands' =>  $brands,


        ]);
    }

    public function updateBrand(Request $request, $id)
    {
        $brands = Brands::findOrfail($id);


        $image = $request->file('image');

        if ($image && $image->isValid()) {
            $path = $image->storeAs('brands', basename($brands->image), 'public');
            $brands->image = $path;
        }

        $brands->name = $request->input('name');
        $brands->description = $request->input('description');

        $brands->save();
        if ($brands->save()) {
            return redirect(route('admin.brands'))->with([
                'message' => sprintf(' The Brand: "%s" edit success !', $brands->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Brand : "%s" can not edit success !', $brands->name),
                'alert-type' => 'error'
            ])->withInput();
        }
     }

}
