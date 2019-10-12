<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use App\ECatalogues;
use Storage;

class ServicesController extends Controller
{
    //
    public function index()
    {

        return view('frontend.home')->with([
            'services' => Services::get()
        ]);
    }
    public function viewById($id)
    {
        // $services = Services::find($id);
        return view('frontend.service-details')->with([
            'services' => Services::find($id),
            'activeServices' => Services::first(),
            'allServices' => Services::offset(1)->get(),
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
