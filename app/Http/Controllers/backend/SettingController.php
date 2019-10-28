<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Settings;

class SettingController extends Controller
{
    //

    public function index()
    {

        return view('backend.Settings.setting')->with([

            'Settings' => Settings::orderBy('id', 'ASC')->limit(5)->get(),
            'email' => Settings::find(7),
            'time' => Settings::where('constant', 'from_time')->first(),
            'to_time' => Settings::where('constant', 'to_time')->first(),
            'from_today' => Settings::where('constant', 'from_today')->first(),
            'to_today' => Settings::where('constant', 'to_today')->first(),
        ]);
    }



    public function update(Request $request)
    {

        // $request->validate([

        //     'linkedin' => 'required|max:255',
        //     'facebook' => 'required|max:255',
        //     'twitter' => 'required|max:255',
        //     'phone' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'time' => 'required',


        // ]);
        $setting = Settings::orderBy('id', 'ASC')->limit(5)->get();
        // dd($request->all());

        foreach ($setting as $set) {

            $result = Settings::where('constant', $set->constant)->update(['value' => $request->input($set->constant)]);
        }

        $result =   Settings::where('constant', 'email')->update(['value' => $request->input('email')]);

        $result =     Settings::where('constant', 'from_time')->update(['value' => $request->input('from_time')]);

        $result =     Settings::where('constant', 'to_time')->update(['value' => $request->input('to_time')]);


        $result =     Settings::where('constant', 'from_today')->update(['value' => $request->input('from_today')]);

        $result =     Settings::where('constant', 'to_today')->update(['value' => $request->input('to_today')]);

        //  return $result;


        if ($result == 1) {
            return redirect()->back()->with([
                'message' => sprintf('Edit success !'),
                'alert-type' => 'success'
            ]);
        } else {

            return redirect()->back()->with([
                'message' => sprintf('Fail  Edit !!',),
                'alert-type' => 'error'
            ]);
        }


        // return redirect(route('admin.tag'))->with('message', sprintf('Tag: "%s" add success !', $tag->name));
    }
}
