<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
class ServicesController extends Controller
{
    //
    public function index(){

        return view ('frontend.home')->with([
            'services' => Services::get()
            ]);
    }
    public function viewById($id)
                {
                    $services = Services::find($id);

                 }


}
