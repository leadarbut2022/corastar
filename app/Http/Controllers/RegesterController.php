<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session ;
use Illuminate\Support\Facades\Cookie;

use App\Models\login as ModelsLogin;
// use Symfony\Component\HttpFoundation\Cookie;
// use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\regester;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.login');
        
    }

    public function registration()
    {
        return view('Auth/register');
        
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' =>'required',
            'email' =>'required|unique:users|string|email|max:255',
            'phone'=>'required',
            'password' =>'required',
            'mohfza' =>'required',
            'city_' =>'required',
            'ather_infoirm' =>'required',
            'igree'=>'required',
             ]);
 
      
       $add= regester::create(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'password' =>Hash::make( $request->password),
                 'mohfza' => $request->mohfza,
                 'city_' => $request->city_,
                 'ather_infoirm' => $request->ather_infoirm,
                 
                
             ]);
        

       if ($add->false) {
        return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
        
       }else{
        return redirect()->route('login')->with('sacsess');   

       }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function show(regester $regester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function edit(regester $regester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regester $regester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function destroy(regester $regester)
    {
        //
    }




    public function customLogin(Request $request){
        $request->validate([
           
            'email' =>'required',
            'password' =>'required',
           
 
             ]);

             $userinfo=regester::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password,$userinfo->password)) {
                  $request->session()->put('logeduser',$userinfo->id);
                  $request->session()->put('nameUser',$userinfo->name);
                  $request->session()->put('phoneuser',$userinfo->phone);
                  $request->session()->put('mohfzauser',$userinfo->mohfza);
                  $request->session()->put('city_user',$userinfo->city_);
                  $request->session()->put('ather_infoirmuser',$userinfo->ather_infoirm);
                  $request->session()->put('mailuser',$userinfo->email);
                 

                  if($request->has('remember_me')){
                    Cookie::queue('email', $request->email, 2629743);
                    Cookie::queue('password', $request->password, 2629743);
                  }


                  
                     return redirect('profile');
                }else{
                    return back()->with('fill','password woring');
                }
             }


        //      $email=$request->input('email');
        //      $pass=$request->input('password');
        //      if (Auth::attempt(['email'=>$email,'password'=>$pass])) {
        //         $user=User::where('email',$email)->first();
        //         Auth::login($user);

        //         return redirect('/profile');
        //      }else{
        //         return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
        //      }


           


         

    }

    public function profile(){
    
        
        return view('clint.profile');
    }
    






  public function signOut(){


    if (Session()->has('logeduser')) {
        Session()->pull('logeduser');
        // Session()->pull('numroes');
        // Session::flush();
        
        return redirect('login');
    }
  }



 


  public function edit_profile(Request $request){


   
      


    $request->validate([
       'name' =>'required',
       'email' =>'required',
       'phone'=>'required',
       'mohfza' =>'required',
       'city_' =>'required',
       'ather_infoirm' =>'required',
    

        ]);

$id_user=$request->id;

$userinfo= regester::where('id', '=', $id_user)->update(
       [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'mohfza' => $request->mohfza,
            'city_' => $request->city_,
            'ather_infoirm' => $request->ather_infoirm,
          
          
           
        ]);

        if (!$userinfo) {
            return back()->with('fill','thiomthong woring');
        }else{
        $request->session()->put('logeduser',$request->id);
        $request->session()->put('nameUser',$request->name);
        $request->session()->put('phoneuser',$request->phone);
        $request->session()->put('mohfzauser',$request->mohfza);
        $request->session()->put('city_user',$request->city_);
        $request->session()->put('ather_infoirmuser',$request->ather_infoirm);
        $request->session()->put('mailuser',$request->email);
   
    return redirect()->route('profile');


        }
   }





   public function edit_profile_page(Request $request){

    $id_pro=$request->id;
    $info = regester::find($id_pro);
    return view('clint/idetProf',compact('info'));
   }
 


}
