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

    //  public function viewById($id)
    //  {
    //       return view('frontend.post-details')->with([
    //          'post' => Posts::find($id),
    //            'archiveposts' => Posts::inRandomOrder()->take(5)->get(),
    //           'latestposts' => Posts::orderBy('created_at', 'desc')->take(5)->get(),


    //      ]);
    //  }

}
