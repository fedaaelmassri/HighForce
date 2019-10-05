<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands
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


}
