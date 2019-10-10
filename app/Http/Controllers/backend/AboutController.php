<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Abouts;


class AboutController extends Controller
{
    //

    public function index()
    {

        return view('backend.aboutUs.index')->with([
            'abouts' => Abouts::get()
        ]);
    }

    public function create()
    {

        return view('backend.aboutUs.store');
    }



    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'required|max:255',


        ]);




        $about_us = new Abouts();
        $about_us->name = $request->input('name');
        $about_us->description = $request->input('description');

        $about_us->save();
        if ($about_us->save()) {
            return redirect(route('admin.aboutUs'))->with([
                'message' => sprintf('Abouts: "%s" add success !', $about_us->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf('About: "%s" can not add success !', $about_us->name),
                'alert-type' => 'error'
            ])->withInput();
        }
    }




    public function delete($id)
    {
        $about = Abouts::findOrfail($id);

        if (!$about) {
            return redirect()->back()->with([
                'message' => sprintf('About can not found!'),
                'alert-type' => 'error'
            ]);
        }

        $about->delete();
        return response()->json(['message' => sprintf('Abouts: "%s" deleted success !', $about->name)]);
    }



    public function editAbout($id)
    {
        $about = Abouts::findOrfail($id);

        if (!$about) {
            return redirect()->back()->with([
                'message' => sprintf('About can not found!'),
                'alert-type' => 'error'
            ]);
        }

        return  view('backend.aboutUs.update', [
            'about' =>  $about,


        ]);
    }

    public function updateAbout(Request $request, $id)
    {
        $about = Abouts::findOrfail($id);




        $about->name = $request->input('name');
        $about->description = $request->input('description');

        $about->save();
        if ($about->save()) {
            return redirect(route('admin.aboutUs'))->with([
                'message' => sprintf('about: "%s" edit success !', $about->name),
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => sprintf('about: "%s" can not edit success !', $about->name),
                'alert-type' => 'error'
            ])->withInput();
        }
    }






































    // public function add_new_application(Request $req)
    // {

    //     $obj_user_privilege = user_privilege_m::where([
    //         ['account_id_fk', '=', session('account_id')], ['privilege_id_fk', '=', 1]
    //     ])->get();



    //     if ($obj_user_privilege) {
    //         $obj = new Application_m();

    //         $obj->street_num = $req['street_num'];

    //         $obj->name_street = $req['name_street'];

    //         $result = $obj->save();

    //         //        $obj_owner = new Owner_m();
    //         //        $application_id = $obj->application_tb_id;
    //         //        $obj_owner->application_id_fk = $application_id;
    //         //        $obj_owner->owner_name = $req['owner_name'];
    //         //        $obj_owner->identity_num = $req['identity_num'];
    //         //        $obj_owner->file_num = $req['file_num'];
    //         //        $obj_owner->coupon_num = $req['coupon_num'];
    //         //        $obj_owner->save();


    //         if (isset($_POST["all_owners"])) {


    //             $all_owners = ($_POST["all_owners"]);
    //             $all_identity_num = ($_POST["all_identity_num"]);

    //             $all_file_num = $_POST["all_file_num"];
    //             $all_coupon_num = $_POST["all_coupon_num"];
    //             $all_building_num = $_POST["all_building_num"];

    //             for ($count = 0; $count < count($all_owners); $count++) {
    //                 $obj_owner = new Owner_m();
    //                 $application_id = $obj->application_tb_id;
    //                 $obj_owner->application_id_fk = $application_id;
    //                 $obj_owner->owner_name = $all_owners[$count];
    //                 $obj_owner->identity_num = $all_identity_num[$count];
    //                 $obj_owner->building_num = $all_building_num[$count];
    //                 $obj_owner->file_num = $all_file_num[$count];
    //                 $obj_owner->coupon_num = $all_coupon_num[$count];
    //                 $obj_owner->save();
    //             }
    //         }


    //         if ($result == 0) {

    //             $response = array("message" => "fail");
    //         } else {

    //             $response = array("message" => "success", "application_id" => $obj_owner->application_id_fk);

    //             //  $req->session()->put("application_id_fk", $data[0]['application_id_fk']);
    //         }
    //     } else {
    //         $response = array("message" => "لا توجد صلاحية");
    //     }
    //     echo json_encode($response);
    // }


}
