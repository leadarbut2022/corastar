<?php

namespace App\Http\Controllers;
// use App\config\mail;
use App\Mail\sendMail;

use Illuminate\Support\Facades\Mail;
use App\Models\regester;
use carbon\Carbon;
use Illuminate\Support\Str;
// // use Psy\Util\Str;
// use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;













class ForgotPasswordController extends Controller
{
    public function shoe_pass_page_reset(){

        return view('Auth/resetpass/get_link');
    }




public function send_sms_link(Request $request){
    
 
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);


  $users = regester::where('email', $request->mail)->get();

 

        $token= str::random(64);


        DB::table('password_resets')->insert([
             'email'=>$request->email,
             'token'=>$token,
             'created_at'=>Carbon::now(),
        ]);



        Mail::send('Auth.resetpass.emailtemp', ['token' => $token], function($message) use($request){
            // $message->to($request->email);
            // $message->subject('Reset Password Notification');

            
        });
  
        return back()->with('eror', 'We have e-mailed your password reset link!');
    
    


         
    //     $action_link=route('form_isert_new_pass',['token'=>$token,'email'=>$request->mail]);
    // $body="$request->mail,تم ارسال  رابط  استعاده كلمه المرور الي حسابكم";
    // Mail::send('Auth/resetpass/emailtemp',['action_link'=>$action_link,'body'=>$body],function($massege ) use($request){
    //        $massege->from('ahmed114747ed@gmail.com','CoraStar');
    //        $massege->to($request->mail,'regester name')->subject('rest password');
// });




    // }else{
          
         
    //        return back()->with('eror','البريد غير موحود');
    // }







   











    }


    public function  form_isert_new_pass(){

        return view('Auth/resetpass/inser_new_pass_');
    }


    public function  inser_nwe_pass(){



    }





}



