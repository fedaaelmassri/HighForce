<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands;
class BrandsController extends Controller
{
    //
    public function index(){

        return view ('backend.brands.index')->with([
            'brands' => Brands::get()
            ]);


    }

    public function create(){

        return view ('backend.brands.addBrands');


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

        $brands ->save();


        return redirect(route('admin.brands'))->with('message', sprintf('Brands "%s" add!', $brands->name));


    }



    public function delete(Request $req)
    {

        $brands = Brands::findOrfail($req['id']);

        $result=  $brands->delete();
        // return redirect(route('admin.brands'))
        //     ->with('message', sprintf('brands "%s" deleted!', $brands->name));
        if ($result==1){

            $arr=array("message"=>"success");
        }else{
            $arr=array("message"=>"fail");

        }
    echo json_encode($arr);

        // return response()->json(['message'=> sprintf('Brands: "%s" deleted success !', $brands->name)]);
    }


    public function editBrands($id)
    {
        $brands = Brands::findOrfail($id);

        return  view('backend.Brands.update', [
            'brands' =>  $brands,


        ]);
    }

    public function updateBrands(Request $request, $id)
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
        return redirect(route('admin.brands'))->with('message', sprintf('Brands: "%s" update success !', $brands->name));
    }

}
