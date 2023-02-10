<?php

namespace App\Http\Controllers;

use App\Models\regester;
use Illuminate\Http\Request;

use App\Models\User;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class FaceBookController extends Controller
{
    /**
     * Login Using Facebook
     */
     public function loginUsingFacebook()
     {
        return Socialite::driver('facebook')->redirect();
        

     }
     
    
     public function callbackFromFacebook()
     {
      try {
           $user = Socialite::driver('facebook')->user();
    
           $saveUser = regester::updateOrCreate([
               'facebook_id' => $user->getId(),
           ],[
               'name' => $user->getName(),
               'email' => $user->getEmail(),
               'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
    
           Auth::loginUsingId($saveUser->id);
    
           return redirect()->route('shop');
           } catch (\Throwable $th) {
              throw $th;
           }
       }
    }
