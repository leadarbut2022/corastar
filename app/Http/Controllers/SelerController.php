<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use App\Models\card_shopping;
use App\Models\prodect;
use App\Models\seler_Wihte;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\Validator;



use App\Models\seler;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class SelerController extends Controller
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
        return view('Auth.register');
        
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
            'email' =>'required|unique:SelerWihte|email|max:255',
            'phone'=>'required',
            'id_nash'=>'required',
            'password' =>'required',
          
 
             ]);
             $userinfo=seler_Wihte::where('email','=',$request->email)->first();
             if ($userinfo > 0) {
                return view('seler/ok_ADD_wite_page')->with('filll',' البريد مستخدم بالفعل ');   
             }
      
       $add=Seler_Wihte::create(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'id_nash'=>$request->id_nash,
                 'password' =>$request->password,
                
                 
                 
                
             ]);
        

       if ($add->false) {
        return back()->with( 'lol' ,'error');
        
       }else{
        return view('seler/ok_ADD_wite_page')->with('filll',' سوف يتم مراجعه البيانات والتواصل معكم لتأكيد الحساب');   


       }


    }


    public function storevaldate(Request $request)
    {
        
        $request->validate([
            'name' =>'required',
            'email' =>'required|string|email|max:255',
            'phone'=>'required',
            'id_nash'=>'required',
            'password' =>'required',
            'mohfza' =>'required',
            'city_' =>'required',
            'ather_infoirm' =>'required',
 
          
 
             ]);
 
          
       $add=seler::create(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'id_nash'=>$request->id_nash,
                 'password' =>Hash::make( $request->password),
                 'mohfza' => $request->email,
                 'city_' => $request->phone,
                 'ather_infoirm'=>$request->id_nash,
                
                
                 
                 
                
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
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function show(seler $regester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function edit(seler $regester)
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
    public function update(Request $request, seler $regester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regester  $regester
     * @return \Illuminate\Http\Response
     */
    public function destroy(seler $regester)
    {
        //
    }




    public function customLogin(Request $request){
        $request->validate([
           
            'email' =>'required',
            'password' =>'required',
           
             ]);

             $userinfo=seler::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password,$userinfo->password)) {
                  $request->session()->put('logeduserseler',$userinfo->id);

                  $request->session()->put('nameslr',$userinfo->name);
                  $request->session()->put('phoneslr',$userinfo->phone);
                  $request->session()->put('mohfzaslr',$userinfo->mohfza);
                  $request->session()->put('city_slr',$userinfo->city_);
                  $request->session()->put('ather_infoirmslr',$userinfo->ather_infoirm);
                  $request->session()->put('mailslr',$userinfo->email);

                  if($request->has('remember_me')){
                    Cookie::queue('emailsel', $request->email, 2629743);
                    Cookie::queue('passwordsel', $request->password, 2629743);

                  }
                  $id_clint=$userinfo->id;
                  $select_num=card_shopping::where('id_tager',  $id_clint)->count();
                  $request->session()->put('num_orders',$select_num);
                     return redirect('profile_seler' );
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

    public function create_prodects(){
    
        
        return view('prodacts.create');
    }
    
    public function profile(){
    
        
        return view('seler.profile');
    }






  public function signOut(){


    if (Session()->has('logeduserseler')) {
        Session()->pull('logeduserseler');
        // Session::flush();
        return redirect('login');
    }
  }



  public function show_all_prodects_seler_post(Request $request){

   
    $id_tager=session()->get('logeduserseler');
       
        $all_post=prodect::where('id_tager', '=', $id_tager)->latest()->get();

         return view('/seler/all_u_post',compact('all_post'));
   
  }



  
  public function delet_u_prodect(Request $request){  


      $id_pro=$request->id_pro;

      prodect::where('id', $id_pro)->delete();
      
      $id_tager=session()->get('logeduserseler');
      $all_post=prodect::where('id_tager', '=', $id_tager)->latest()->get();
      
      return view('/seler/all_u_post',compact('all_post'));
  }

  public function edit_u_prodect(Request $request)
  {
    $id_pro=$request->id_pro;
      $u_pro = prodect::find($id_pro);
      // Load user/createOrUpdate.blade.php view
      return view('/seler/edit_u_prodect',compact('u_pro'));
  }

   public function update_pro(Request $request){


    if ($request->hasFile('img')) {
        $filename=$request->img;
        $new_fill=time().$filename->getClientOriginalName();
        $filename->move(public_path('img/prodect/'),$new_fill);

        $name_img= 'img/prodect/'.$new_fill;
    } 

    if (!$request->hasFile('img')) {
        $name_img=$request->d_img;
    }
      


    $request->validate([
       'name_prod' =>'required',
       'type_' =>'required',
       'avelb'=>'required',
       'discription' =>'required',
       'prise' =>'required',
    

        ]);
$id_clint=$request->id;

 prodect::where('id', '=', $id_clint)->update(
       [
            'name_prod' => $request->name_prod,
            'discription' => $request->discription,
            'type_' => $request->type_,
            'avelb' => $request->avelb,
       
            'img'=>$name_img ,
            'prise' => $request->prise,
          
           
        ]);
   
    return redirect()->route('profile_seler');

   }

   public function orders_from_clint(Request $request){

    $id_tager=session()->get('logeduserseler');
    $one=1;
    $all_post=card_shopping::where([['id_tager', '=', $id_tager] ,['stat', '=', $one] ,])->latest()->get();

    return view('/seler/oreder_from_clint',compact('all_post'));

   }



   public function allw_order(Request $request){
    
    $id_tager=session()->get('logeduserseler');
    $id_pro=$request->id_pro;
    $one=1;
    card_shopping::where('id_pro', '=', $id_pro)->update(['stat_tag' => $one]);
    $all_post=card_shopping::where([['id_tager', '=', $id_tager] ,['stat', '=', $one] ,])->get();

    return view('/seler/oreder_from_clint',compact('all_post'));
   }


}
