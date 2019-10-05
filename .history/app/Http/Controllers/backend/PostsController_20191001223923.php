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

        if ($posts->save()) {
            return redirect(route('admin.posts'))->with([
                'message' => sprintf(' The Post: "%s" add success !', $posts->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Post: "%s" can not add success !', $posts->name),
                'alert-type' => 'error'
            ])->withInput();
        }

    }

    public function delete($id)
    {
         $posts = Posts::findOrfail($id);

        if (!$posts) {
            return redirect()->back()->with([
                'message' => sprintf('The Post can not found!'),
                'alert-type' => 'error'
            ]);
        }

        $posts->delete();
        return response()->json(['message' => sprintf(' The Post: "%s" deleted success !', $posts->name)]);
    }



    public function editPost($id)
    {
        $posts = Posts::findOrfail($id);

        if (!$posts) {
            return redirect()->back()->with([
                'message' => sprintf('The Post can not found!'),
                'alert-type' => 'error'
            ]);
        }
        return  view('backend.Posts.update', [
            'posts' =>  $posts,


        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $posts = Posts::findOrfail($id);


        $image = $request->file('image');

        if ($image && $image->isValid()) {
            $path = $image->storeAs('posts', basename($posts->image), 'public');
            $posts->image = $path;
        }

        $posts->name = $request->input('name');
        $posts->description = $request->input('description');

        $posts->save();

        if ($posts->save()) {
            return redirect(route('admin.posts'))->with([
                'message' => sprintf(' The Post: "%s" edit success !', $posts->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Post: "%s" can not edit success !', $posts->name),
                'alert-type' => 'error'
            ])->withInput();
        }
     }


}
