<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Settings;
use Illuminate\Support\Facades\View;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function __construct()
    {
        $linkedin = Settings::where('constant', 'linkedin ')->pluck('value')->toArray();
        $linkedin_value = $linkedin[0];

        $facebook = Settings::where('constant', 'facebook')->pluck('value')->toArray();
        $facebook_value = $facebook[0];

        $twitter = Settings::where('constant', 'twitter')->pluck('value')->toArray();
        $twitter_value = $twitter[0];

        $phone = Settings::where('constant', 'phone ')->pluck('value')->toArray();
        $phone_value = $phone[0];

        $time = Settings::where('constant', 'from_time')->pluck('value')->toArray();
        $from_time_value = $time[0];

        $to_time = Settings::where('constant', 'to_time')->pluck('value')->toArray();
        $to_time_value = $to_time[0];

        $address = Settings::where('constant', 'address')->pluck('value')->toArray();
        $address_value = $address[0];

        $email = Settings::where('constant', 'email')->pluck('value')->toArray();
        $email_value = $email[0];


        $from_today = Settings::where('constant', 'from_today')->pluck('value')->toArray();
        $from_today_value = $from_today[0];


        $to_today = Settings::where('constant', 'to_today')->pluck('value')->toArray();
        $to_today_value = $to_today[0];





        $data = [
            'linkedin_value' => $linkedin_value,
            'facebook_value' => $facebook_value,
            'twitter_value' => $twitter_value,
            'phone_value' => $phone_value,
            'from_time_value'  => $from_time_value,
            'to_time_value'=>$to_time_value,
            'address_value'=>$address_value,
            'from_today_value' =>$from_today_value,
            'to_today_value' =>$to_today_value,
            'email_value' =>$email_value,





        ];
        View::share('data', $data);
    }
}
