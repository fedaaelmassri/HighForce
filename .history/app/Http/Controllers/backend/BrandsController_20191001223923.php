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
