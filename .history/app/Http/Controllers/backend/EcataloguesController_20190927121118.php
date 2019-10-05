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

        ]);
        $filename = $request->input('name');
        if($request->hasfile('file')){
            $file = $request->file('file');
            $mimetype =$file->getClientMimeType();
    		$size = $file->getClientSize();
           // $file = $filename . '.' . $file->getClientOriginalExtension();
             $file_path =$file->store('eCatalogues');
             //storage_path('/eCatalogues');
            // $filename = $file['filename']->getClientOriginalExtension();
         //   Storage::make($file)->save( public_path('/storage/eCatalogues/' . $filename) );

            // Storage::disk('local')->putFile($file_path, new File($request->file), $file);
            //$path = $request->file('file')->store( storage_path('/storage/loonstrookjes/'));
            //$path = Storage::putFile(storage_path('/loonstrookjes/'), $filename);
            //dd($upload);

            //return $put;
        }

    	//$file = $request->file('file');

    	ECatalogues::create([
            'name' => $filename,
            'description'=>'description',
            'image'=>'image',
    		'filepath' => $file_path,
    		'mimetype' => $mimetype,
    		'size' => $size,
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


        return redirect(route('admin.ecatalogues'))->with('message', sprintf('ECatalogue "%s" add!'));



    }
}
