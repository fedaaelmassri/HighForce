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


    public function delete(Request $req)
    {

        $news = News::findOrfail($req['id']);

        $result=  $news->delete();
        // return redirect(route('admin.news'))
        //     ->with('message', sprintf('news "%s" deleted!', $news->name));
        if ($result==1){

            $arr=array("message"=>"success");
        }else{
            $arr=array("message"=>"fail");

        }
    echo json_encode($arr);

        // return response()->json(['message'=> sprintf('News: "%s" deleted success !', $news->name)]);
    }


    public function editNews($id)
    {
        $news = News::findOrfail($id);

        return  view('backend.News.update', [
            'news' =>  $news,


        ]);
    }

    public function updateNews(Request $request, $id)
    {
        $news = News::findOrfail($id);


        $image = $request->file('image');

        if ($image && $image->isValid()) {
            $path = $image->storeAs('news', basename($news->image), 'public');
            $news->image = $path;
        }

        $news->name = $request->input('name');
        $news->description = $request->input('description');

        $news->save();
        return redirect(route('admin.news'))->with('message', sprintf('News: "%s" update success !', $news->name));
    }


}
