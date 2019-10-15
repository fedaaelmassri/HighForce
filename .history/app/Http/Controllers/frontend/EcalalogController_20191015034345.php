<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ECatalogues;
use Storage;

class EcalalogController extends Controller
{
     //
     public function index()
     {

         return view('frontend.ecatalog')->with([
             'ecatalogs' => ECatalogues::paginate(10)
         ]);
     }


     public function viewById($id)
     {
        $ecatalog = ECatalogues::findOrFail($id);
        $ecatalog->increment('downloads', 1);

        return response()->file(storage_path( $ecatalog->filepath));
     }

}
