<?php

namespace App\Http\Controllers;

use App\Models\NEWS;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;


use App\Models\newsposter;
use Illuminate\Http\Request;

class NewsposterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function registrationPoster_preson(Request $request)
    {
       
        
      $request->validate([
        'name' =>'required',
        'email' =>'required|string|email|max:255',
        'phone'=>'required',
        'password' =>'required',


      

         ]);

   $add=newsposter::create(
        [
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'password' =>Hash::make( $request->password),
  
            
             
             
            
         ]);
    

   if ($add->false) {
    return back()->with( 'lol' ,'error');
    
   }else{
    return back()->with('filll','سوف يتم اضافه الحساب');   

   }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsposter  $newsposter
     * @return \Illuminate\Http\Response
     */
    public function show(newsposter $newsposter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsposter  $newsposter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsposter $newsposter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsposter  $newsposter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsposter $newsposter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsposter  $newsposter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsposter $newsposter)
    {
        //
    }




    public function customLogin(Request $request){
        $request->validate([
           
            'email' =>'required',
            'password' =>'required',
           
 
             ]);

             $userinfo=newsposter::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password,$userinfo->password)) {
                //   $request->session()->put('logednewsPoster',$userinfo->id);
                  $sessions = [
                    'logednewsPoster' => $userinfo->id,
                    'section' => $userinfo->name,
                ];
        
                $request->session()->put($sessions);
                //   $data = $request->session()->all();
                if($request->has('remember_me')){
                    Cookie::queue('emailpos', $request->email, 2629743);
                    Cookie::queue('passwordpos', $request->password, 2629743);
                  }

                     return redirect('createPost');
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

    public function loginposterPage(){
    
        
        return view('newsPoster.login_poster');
    }
    
    public function createPost(){
    
        
        return view('newsPoster.createPost');
    }






  public function signOut(){


    if (Session()->has('logednewsPoster') && session()->has('section')) {
        Session()->pull('logednewsPoster');
        Session()->pull('section');
        // Session::flush();
        return redirect('prodects');
    }
  }



  public function allpost(){
    $id_poster=session()->get('logednewsPoster');
       
    $all_post=NEWS::where('id_Poster', '=', $id_poster)->latest()->get();;

     
    return view('newsPoster/all_posts',compact('all_post'));

  }
 

  public function delet_fromPoster(Request $request){
    $id=$request->id;
    NEWS::where('id', $id)->delete(); 
    $id_poster=session()->get('logednewsPoster');
    $all_post=NEWS::where('id_Poster', '=', $id_poster)->latest()->get();;
    return view('newsPoster/all_posts',compact('all_post'));
   
  }

}
