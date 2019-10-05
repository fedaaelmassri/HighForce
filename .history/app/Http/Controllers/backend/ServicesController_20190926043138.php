<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services;
class ServicesController extends Controller
{
        //

    public function index(){

        return view ('backend.services.index')->with([
            'services' => Services::get()
            ]);


    }

    public function create(){

        return view ('backend.services.addServices');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('services', 'public');
        } else {

            $path = null;
        }

        $services = new Services();
        $services->name = $request->input('name');
        $services->description = $request->input('description');
        $services ->image = $path;

        $services ->save();


        return redirect(route('admin.services'))->with('message', sprintf('Services "%s" add!', $services->name));


    }



}
