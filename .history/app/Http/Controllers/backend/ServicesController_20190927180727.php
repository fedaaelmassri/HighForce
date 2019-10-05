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


        return redirect(route('admin.services'))->with('message', sprintf('Services "%s" add!', $services->name));


    }




    public function delete(Request $req)
    {

        $services = Services::findOrfail($req['id']);

        $result=  $services->delete();
        // return redirect(route('admin.services'))
        //     ->with('message', sprintf('services "%s" deleted!', $services->name));
        if ($result==1){

            $arr=array("message"=>"success");
        }else{
            $arr=array("message"=>"fail");

        }
    echo json_encode($arr);

        // return response()->json(['message'=> sprintf('Services: "%s" deleted success !', $services->name)]);
    }


    public function editService($id)
    {
        $services = Services::findOrfail($id);

        return  view('backend.Services.update', [
            'services' =>  $services,


        ]);
    }

    public function updateServices(Request $request, $id)
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
        return redirect(route('admin.services'))->with('message', sprintf('Services: "%s" update success !', $services->name));
    }

}
