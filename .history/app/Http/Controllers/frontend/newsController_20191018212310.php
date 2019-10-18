<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Storage;
class newsController extends Controller
{
    //
    public function index()
    {

        return view('frontend.news')->with([
            'news' => News::paginate(10)
        ]);
    }

    public function viewById($id)
    {
         return view('frontend.new-details')->with([
            'new' => News::find($id),
              'archivenews' => News::inRandomOrder()->take(5)->get(),
             'latestnews' => News::orderBy('created_at', 'desc')->take(5)->get(),


        ]);
    }
}
