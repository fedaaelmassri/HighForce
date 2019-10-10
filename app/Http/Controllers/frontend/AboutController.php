<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Abouts;
class AboutController extends Controller
{
    public function index() {
        return view('frontend.about')->with([
            'abouts' => Abouts::get()
        ]);

    }



}
