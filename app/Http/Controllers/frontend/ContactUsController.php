<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Session;


class ContactUsController extends Controller
{
    public function index() {
        return view('frontend.contact_us');

    }
    public function docontactus(Request $request)
    {

        $validatedData = $request->validate([

            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',

          ],
         );


        $email=$request->email;
        $msg=$request->message;
        $name=$request->name;
        $sub=$request->subject;
        $phone=$request->phone;

        $emailcompany ='salam.alfaleet@gmail.com';
        // Setting::where('name','email')->pluck('value')->toArray();
        // $emailadmin = $emailcompany[0];

        //dd($emailadmin);

        $namecompany = 'High Force' ;

        // Setting::where('name','companyname')->pluck('value')->toArray();
        // $titlecompany = $namecompany[0];

        //dd($titlecompany);

        $content='
         <br>  حساب الخاص بك : '.$email.' <br>
         الاسم : <strong> '.$name.' </strong> <br>
         رقم الجوال : <strong> '.$phone.' </strong> <br>
         الموضوع : <strong> '.$sub.' </strong> <br>
         نص الرسالة : <p> '.$msg.'</p> ';

        $subject='اتصل بنا';

        $emails=array('email_from'=>$emailcompany,'email_to'=>$email,'subject'=>$subject) ;

        $data = [
                'content' => $content,
                'Subject'=>$subject,
                'usernameadmin'=>$namecompany
            ];

        $mail=\Mail::send('emails.system-mail', $data, function ($message) use ($emails)
            {
            $message->from($emails['email_from'], 'highForce Contact us');
            $message->to($emails['email_to'])->subject($emails['subject']);
        });

        Session::put(['message',' تم إرسال رسالتك بنجاح ']);
        $notification = array(

            'message' => 'تم إرسال رسالتك بنجاح ',

            'alert-type' => 'success'

          );
          return redirect()->route('contactUs')->with($notification);


        // if($mail)
        // {
        //     Session::put(['messagecontactus',' تم إرسال رسالتك بنجاح ']);
        //     $notification = array(

        //         'messagecontactus' => 'تم إرسال رسالتك بنجاح ',

        //         'alert-type' => 'success'

        //       );
        //       return redirect()->route('contactus.url')->with($notification);

        // }
        // else
        // {
        //     Session::put(['messageregister', ' لم يتم إرسال رسالتك ']);
        //     $notification = array(

        //         'messagecontactus' => 'لم يتم إرسال رسالتك ',

        //         'alert-type' => 'error'

        //       );
        //       return redirect()->route('contactus.url')->with($notification);

        // }

    }

    public function QuickContactus(Request $request)
    {

        $validatedData = $request->validate([

            'email' => 'required|email',

            'message' => 'required',

          ],
         );


        $email=$request->email;
        $msg=$request->message;


        $emailcompany ='salam.alfaleet@gmail.com';
        // Setting::where('name','email')->pluck('value')->toArray();
        // $emailadmin = $emailcompany[0];

        //dd($emailadmin);

        $namecompany = 'High Force' ;

        // Setting::where('name','companyname')->pluck('value')->toArray();
        // $titlecompany = $namecompany[0];

        //dd($titlecompany);

        $content='
         <br>  Email : '.$email.' <br>

         Message: <p> '.$msg.'</p> ';

        $subject='Quick Contact';

        $emails=array('email_from'=>$emailcompany,'email_to'=>$email,'subject'=>$subject) ;

        $data = [
                'content' => $content,
                'Subject'=>$subject,
                'usernameadmin'=>$namecompany
            ];

        $mail=\Mail::send('emails.system-mail', $data, function ($message) use ($emails)
            {
            $message->from($emails['email_from'], 'highForce Contact us');
            $message->to($emails['email_to'])->subject($emails['subject']);
        });

        Session::put(['message',' تم إرسال رسالتك بنجاح ']);
        $notification = array(

            'message' => 'تم إرسال رسالتك بنجاح ',

            'alert-type' => 'success'

          );
          return redirect()->route('Home')->with($notification);


        // if($mail)
        // {
        //     Session::put(['messagecontactus',' تم إرسال رسالتك بنجاح ']);
        //     $notification = array(

        //         'messagecontactus' => 'تم إرسال رسالتك بنجاح ',

        //         'alert-type' => 'success'

        //       );
        //       return redirect()->route('contactus.url')->with($notification);

        // }
        // else
        // {
        //     Session::put(['messageregister', ' لم يتم إرسال رسالتك ']);
        //     $notification = array(

        //         'messagecontactus' => 'لم يتم إرسال رسالتك ',

        //         'alert-type' => 'error'

        //       );
        //       return redirect()->route('contactus.url')->with($notification);

        // }

    }


}
