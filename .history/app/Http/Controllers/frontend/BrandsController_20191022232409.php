<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brands;
use App\ECatalogues;
use Storage;
use App\Categories;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    //
    public function index()
    {

        return view('frontend.brands')->with([
            'brands' => Brands::get()

        ]);
    }
    public function viewById($id)
    {
        // $services = Services::find($id);
        return view('frontend.service-details')->with([
            'services' => Services::find($id),
            'activeServices' => Services::first(),
            'allServices' => Services::get(),
            //'allServices' => Services::offset(1)->take(6)->get(),
            'ecatalogues' => ECatalogues::get()

        ]);
    }



    public function downloads($id){


        $download= ECatalogues::findOrfail($id);
        $download->increment('downloads',1);
        $ext=pathinfo(storage_path('app/'. $download->filepath ),PATHINFO_EXTENSION);
        return Storage::download($download->filepath ,$download->name . '.'. $ext);

    //   return response()->download(storage_path('app/'. $download->filepath ),$download->name . '.'. $ext);
    }

}
