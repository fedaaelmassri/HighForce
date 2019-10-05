<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categories;

class CategoryController extends Controller
{
    //

    public function index()
    {

        return view('backend.Categories.index');
    }

    public function create()
    {

        return view('backend.Categories.AddCategory');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('news', 'public');
        } else {

            $path = null;
        }

        $category = new Categories();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->image = $path;

        $category->save();
        if ($category->save()) {
            return redirect(route('admin.news'))->with([
                'message' => sprintf('category: "%s" add success !', $category->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf('News: "%s" can not add success !', $category->name),
                'alert-type' => 'error'
            ])->withInput();
        }


    }



}
