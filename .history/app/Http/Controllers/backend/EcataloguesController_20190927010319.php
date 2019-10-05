<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ECatalogues;
class EcataloguesController extends Controller
{
    //
    public function index(){

        return view ('backend.eCatalogues.index')->with([
            'eCatalogues' => ECatalogues::get()
            ]);


    }

    public function create(){

        return view ('backend.eCatalogues.addECatalogue');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('eCatalogues', 'public');
        } else {

            $path = null;
        }

        $eCatalogues = new ECatalogues();
        $eCatalogues->name = $request->input('name');
        $eCatalogues->description = $request->input('description');
        $eCatalogues ->image = $path;

        $eCatalogues ->save();


        return redirect(route('admin.eCatalogues'))->with('message', sprintf('ECatalogue "%s" add!', $eCatalogues->name));


    }
}
