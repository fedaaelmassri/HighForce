<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services;
class ServicesController extends Controller
{
        //

    public function index(){

        return view ('backend.services.index')->with([
            'services' => Services::get()
            ]);


    }

    public function create(){

        return view ('backend.services.addServices');


    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' =>'required|max:255',
            'image' => 'required|image',

        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('services', 'public');
        } else {

            $path = null;
        }

        $services = new Services();
        $services->name = $request->input('name');
        $services->description = $request->input('description');
        $services ->image = $path;
        $services ->save();
        if ($services->save()) {
            return redirect(route('admin.services'))->with([
                'message' => sprintf(' The Service: "%s" add success !', $services->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Service: "%s" can not add success !', $services->name),
                'alert-type' => 'error'
            ])->withInput();
        }

    }

    public function delete($id)
    {

       $services = Services::findOrfail($id);
        if (!$services) {
            return redirect()->back()->with([
                'message' => sprintf('The Service can not found!'),
                'alert-type' => 'error'
            ]);
        }

        $services->delete();
        return response()->json(['message' => sprintf(' The Service: "%s" deleted success !', $services->name)]);
    
 }


    public function editService($id)
    {
        $services = Services::findOrfail($id);
        if (!$services) {
            return redirect()->back()->with([
                'message' => sprintf('The Service can not found!'),
                'alert-type' => 'error'
            ]);
        }
        return  view('backend.Services.update', [
            'services' =>  $services,


        ]);
    }

    public function updateService(Request $request, $id)
    {
        $services = Services::findOrfail($id);


        $image = $request->file('image');

        if ($image && $image->isValid()) {
            $path = $image->storeAs('services', basename($services->image), 'public');
            $services->image = $path;
        }

        $services->name = $request->input('name');
        $services->description = $request->input('description');

        $services->save();
        if ($services->save()) {
            return redirect(route('admin.services'))->with([
                'message' => sprintf(' The Service: "%s" update success !', $services->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf(' The Service: "%s" can not update success !', $services->name),
                'alert-type' => 'error'
            ])->withInput();
        }
     }

}
