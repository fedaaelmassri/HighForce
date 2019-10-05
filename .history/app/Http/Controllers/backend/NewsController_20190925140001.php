<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;

class NewsController extends Controller
{
    //

    public function index(){

        return view ('backend.news.index')->with([
            'news' => News::get()
            ]);


    }

    public function create(){

        return view ('backend.news.addNews');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('news', 'public');
        } else {

            $path = null;
        }

        $news = new News();
        $news->name = $request->input('name');
        $news->description = $request->input('description');
        $news ->image = $path;

        $news ->save();


        return redirect(route('admin.news'))->with('message', sprintf('News "%s" add!', $news->name));


    }


}
