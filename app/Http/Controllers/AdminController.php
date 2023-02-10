<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

use App\Models\msg ;
use App\Models\admin;
use App\Models\card_shopping;
use App\Models\NEWS;
use App\Models\newsposter;
use App\Models\prodect;
use App\Models\regester;
use App\Models\seler;
use App\Models\seler_Wihte;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       public function loginAdminPage(Request $request){
        
             return view('admin/login_admin');
       }

                    public function addseler(Request $request){
                        
                        return view('admin/addseler');
                    }

                    public function addposter(Request $request){
                            
                        return view('admin/addposter');
                    }

                    public function addadminpage(Request $request){
                            
                        return view('admin/addadmin');
                    }



       public function loginAdmin(Request $request){

        $request->validate([
           
            'email' =>'required',
            'password' =>'required',
           
 
             ]);

             $userinfo=admin::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password,$userinfo->password)) {
                //   $request->session()->put('logednewsPoster',$userinfo->id);
                  $sessions = [
                    'adminID' => $userinfo->id,
                    'adminNAME' => $userinfo->name,
                ];
        
                $request->session()->put($sessions);

                if($request->has('remember_me')){
                    Cookie::queue('emailadmin', $request->email, 2629743);
                    Cookie::queue('passwordadmin', $request->password, 2629743);
                  }
                //   $data = $request->session()->all();
                     return redirect('dachbord');
                }else{
                    return back()->with('fill','password woring');
                }
             }



       }

    public function dachbord(Request $request)
    {
        $num_selers=seler::count();
        session()->put('num_selers',$num_selers); 
        $num_clint= regester::count(); 
        session()->put('num_clint',$num_clint);
        $num_posters=newsposter::count() ;
        session()->put('num_posters',$num_posters);
        $num_prodects= prodect::count();
        session()->put('num_prodects',$num_prodects);
        $num_postes= NEWS::count();
        session()->put('num_postes',$num_postes);
        $num_admins=admin::count();
        session()->put('num_admins',$num_admins);
        $num_req=card_shopping::count();
        session()->put('num_req',$num_req);
        $num_whete=seler_Wihte::count();
        session()->put('num_whete',$num_whete);

        return view('admin/dachbord');
        
        
    }

    public function assest(Request $request){
        $i=$request->i;
       if($i==1){ 
            $prodect=seler::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==2){
            $prodect=regester::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==3){
            $prodect=newsposter::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==4){
            $prodect=prodect::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==5){ 
            $prodect=NEWS::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==6){ 
            $prodect=card_shopping::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($i==7){ 
            $prodect=seler_Wihte::latest()->get();
            return view('admin/assest',compact('i'),compact('prodect'));
        }
       
       

        


    }



   



    public function delet_fromadmin(Request $request){
        $id=$request->id;
        $i=$request->i;
        $type=$request->type;
        if ($type == 1) {
            seler::where('id', $id)->delete();
            $prodect=seler::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($type == 2){

            regester::where('id', $id)->delete();
            $prodect=regester::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($type == 3){
            newsposter::where('id', $id)->delete();
            $prodect=newsposter::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($type == 4){
            prodect::where('id', $id)->delete();
            $prodect=prodect::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($type == 5){
            NEWS::where('id', $id)->delete();
            $prodect=NEWS::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }elseif($type == 6){
            card_shopping::where('id', $id)->delete();
            $prodect=card_shopping::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }
        elseif($type == 7){
            seler_Wihte::where('id', $id)->delete();
            $prodect=seler_Wihte::all();
            return view('admin/assest',compact('i'),compact('prodect'));
        }


       
    }


    public function logoutadmin(Request $request){

        if (Session()->has('adminID') && Session()->has('adminNAME') ) {
            Session()->pull('adminID');
            Session()->pull('adminNAME');
            Session()->pull('num_selers');
            Session()->pull('num_clint');
            Session()->pull('num_posters');
            Session()->pull('num_prodects');
            Session()->pull('num_postes');
            Session()->pull('num_admins');
            Session()->pull('num_req');
            // Session::flush();

            return view('admin/login_admin');
        }
    }
    




     public function addAdmin(Request $request){
       $request->validate([
        'name',
        'email',
        'password',

       ]);

       $add=admin::create(
        [
             'name' => $request->name,
             'email' => $request->email,
             'password' =>Hash::make( $request->password),
          
            
             
             
            
         ]);

             if ($add->false) {
        return back()->with( 'lol' ,'error');
        
       }else{
        return back()->with('filll','سوف يتم اضافه الحساب');   

       }
    

     }





     public function chat(Request $request){

        $stat=0;
        $num_ =msg::where('stat', '=', $stat)->latest()->get();
        return view('admin/chat',compact('num_'));
    }


    public function neshed(Request $request){

        $stat=0;
        $heders =NEWS::latest()->paginate(10);
        return view('home/match',compact('heders'));
    }


     
}
