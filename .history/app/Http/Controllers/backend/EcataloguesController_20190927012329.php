<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ECatalogues;
use Storage;
use Carbon\Carbon;

class EcataloguesController extends Controller
{
    //
    public function index(){

        return view ('backend.eCatalogues.index')->with([
            'ecatalogues' => ECatalogues::get()
            ]);


    }

    public function create(){

        return view ('backend.eCatalogues.addECatalogue');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'file' => 'required',
             'image' => 'required|image',

        ]);


    	$file = $request->file('file');

    	ECatalogues::create([
    		'name' => $request->post('name'),
    		'filepath' => $file->store('downloads'),
    		'mimetype' => $file->getClientMimeType(),
    		'size' => $file->getClientSize(),
     		'downloads' => 0,
    	]);

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $path = $image->store('eCatalogues', 'public');
        // } else {

        //     $path = null;
        // }

        // $eCatalogues = new ECatalogues();
        // $eCatalogues->name = $request->input('name');
        // $eCatalogues->description = $request->input('description');
        // $eCatalogues ->image = $path;

        // $eCatalogues ->save();


        return redirect(route('admin.eCatalogues'))->with('message', sprintf('ECatalogue "%s" add!', $eCatalogues->name));



    }
}
