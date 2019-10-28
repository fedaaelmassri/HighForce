<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{


    public function __construct()
    {
        parent::__construct();

    }
    public function index() {
        return view('frontend.home');

    }



}
