<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use Storage;

class PostsController extends Controller
{
    //
    public function index()
    {

        return view('frontend.blog')->with([
            'posts' => Posts::get()
        ]);
    }

    public function viewById($id)
    {
        // $services = Services::find($id);
        return view('frontend.post-details')->with([
            'posts' => Posts::find($id),
             'allPosts' => Posts::get()

        ]);
    }


}
