<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
class PostsController extends Controller
{
    //
    //
    public function index(){

        return view ('backend.posts.index')->with([
            'posts' => Posts::get()
            ]);


    }

    public function create(){

        return view ('backend.posts.addPosts');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('posts', 'public');
        } else {

            $path = null;
        }

        $posts = new Posts();
        $posts->name = $request->input('name');
        $posts->description = $request->input('description');
        $posts ->image = $path;

        $posts ->save();


        return redirect(route('admin.posts'))->with('message', sprintf('Posts "%s" add!', $posts->name));


    }

}
