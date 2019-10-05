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


    public function delete(Request $req)
    {

        $posts = Posts::findOrfail($req['id']);

        $result=  $posts->delete();
        // return redirect(route('admin.posts'))
        //     ->with('message', sprintf('posts "%s" deleted!', $posts->name));
        if ($result==1){

            $arr=array("message"=>"success");
        }else{
            $arr=array("message"=>"fail");

        }
    echo json_encode($arr);

        // return response()->json(['message'=> sprintf('Posts: "%s" deleted success !', $posts->name)]);
    }


    public function editPost($id)
    {
        $posts = Posts::findOrfail($id);

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
        return redirect(route('admin.posts'))->with('message', sprintf('Posts: "%s" update success !', $posts->name));
    }


}
