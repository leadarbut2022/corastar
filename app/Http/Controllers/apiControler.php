<?php

namespace App\Http\Controllers;

use App\Http\Resources\caed_interimResource;


use App\Models\NEWS;
use App\Models\prodect;
use Illuminate\Http\Request;
use App\Http\Resources\NewsCollection;
use App\Http\Resources\NewsResource;
use App\Http\Resources\prodectCollection;
use App\Http\Resources\prodectResource;
use App\Http\Resources\caed_interimCollection;
use App\Http\Resources\userCollection;
use App\Http\Resources\userResource;

// use App\Http\Resources\card_shopping;
use App\Http\Resources\card_shoppingResource;
use Illuminate\Support\Facades\Hash;

use App\Models\caed_interim;
use App\Models\card_shopping;
use App\Models\regester;

class apiControler extends Controller



{


    /************************************************* news */

    public  function news()
    {
        $news = NEWS::latest()->take(100)->get();

        // $news= NEWS::whereColumn('name_poster', 'addres_post','discription')->get();
        return  NewsResource::collection(NEWS::all());
        // return response()->json(['data' => $news, 'req_date'=>date(format:'Y-M-D')] ,status:200);
    }



    /************************************************* prodect */

    public  function prodects()
    {
        return  prodectResource::collection(prodect::all());
    }





    /************************************************* shop */


    public  function storeinpascket(Request $request)
    {
        


     
        
        $d = $request->id_pro;
    if (caed_interim::where('id_pro', $d)->count() > 0) {

    

        $exets=true;
        return response()->json(['message' => trans('response.failed'),compact('exets')], 444);

    }else{

$size='';
    if ( $request->size == 1) {
        $size='s';
    }elseif( $request->size == 2){
        $size='sm';
    }
    elseif( $request->size == 3){
        $size='l';
    }elseif( $request->size == 4){
        $size='xl';
    }elseif( $request->size == 5){
        $size='xxl';
    }

   


          
     
        card_shopping::create(
                [

                    // 'clint_name' => $request->name_clint,
                    // 'clint_addres' => $request->name_address,
                    // 'clint_phone' => $request->name_phone,
                    //  'name_prod' => $request->name_prod,
                    //  'discription' => $request->discription,
                    //  'type_' => $request->type_,
                    //  'id_pro' => $request->id,
                    //  'img'=> $request->img,
                    //  'avelb'=> $request->many, 
                    //  'prise' => $request->prise,
                    //  'size' => $size ,
                    //  'id_tager' => $request->id_tager,
                    //  'id_clint' => $request->id_clint,


                    'clint_name' => $request->clint_name,
                    'clint_addres' => $request->clint_addres,
                    'clint_phone' => $request->clint_phone,
                    'name_prod' => $request->name_prod,
                    'discription' => $request->discription,
                    'type_' => $request->type_,
                    'id_pro' => $request->id_pro,
                    'img'=> $request->img,
                    'avelb'=> $request->avelb,                              
                    'prise' => $request->prise,
                    'size' => $size ,
                    'id_tager' => $request->id_tager,
                    'id_clint' => $request->id_clint,
                    
                 ]);


               

                 caed_interim::create(

                    [
        
                        'clint_name' => $request->clint_name,
                         'clint_addres' => $request->clint_addres,
                         'clint_phone' => $request->clint_phone,
                         'name_prod' => $request->name_prod,
                         'discription' => $request->discription,
                         'type_' => $request->type_,
                         'id_pro' => $request->id_pro,
                         'img'=> $request->img,
                         'avelb'=> $request->avelb,                              
                         'prise' => $request->prise,
                         'size' => $size ,
                         'id_tager' => $request->id_tager,
                         'id_clint' => $request->id_clint,
                                    
                     ]);
        
        
           
                 $added=true;
        
                 return response()->json(['message' => trans('response.sacsess'),compact('added')], 200);

        }


    }






    public  function allinshop(Request $request)

    {

        $id_clint = $request->id_clint;
        return  caed_interimResource::collection(caed_interim::where('id_clint', '=', $id_clint)->get());
    }


    public  function historyprodect(Request $request)

    {

        $id_clint = $request->id_clint;
        return  card_shoppingResource::collection(card_shopping::where('id_clint', '=', $id_clint)->get());
    }






    public  function deletfromshop(Request $request)
    {
        $request->validate([

            'id' => 'required',

        ]);


        $id = $request->id;

        if (caed_interimResource::collection(caed_interim::where('id_pro', '=', $id)->delete()) && card_shoppingResource::collection(card_shopping::where('id_pro', '=', $id)->delete())) {
            return    "deleted";
        } else {
            return    "notdelet";
        }
    }



    public function deletall_itarm(Request $request){    
        
        $id_clint=$request->id_clint;

        
       $one= $request->id;

       if( card_shopping::where('id_clint', '=', $id_clint)->update(['stat' => $one])){
        
       

        
        caed_interim::where('id_clint', $id_clint)->delete();
    
       
        $select_num=caed_interim::where('id_clint',  $id_clint)->count();
                  
        $added=true;
        
        return response()->json(['message' => trans('response.sacsess'),compact('added')], 200);

       }
    }




    public function deletone(Request $request)
    {   
        $id_pro=$request->id_pro;
        $id_clint=$request->id_clint;
        caed_interim::where('id_pro', $id_pro)->delete();
        card_shopping::where('id_pro', $id_pro)->delete();

 
       
        $id_clint = $request->id_clint;
        return  caed_interimResource::collection(caed_interim::where('id_clint', '=', $id_clint)->get());
    }


    /************************************************* shop */






    /************************************************* user */


    public function  regester(Request $request)
    {

        $regestersuccess='';
        $emailexets='';
        $users = regester::where('email', $request->email)->get();

        # check if email is more than 1

        if(sizeof($users) > 0){
            # tell user not to duplicate same email
            $emailexets=true;
            return response()->json(['message' => trans('response.failed'),compact('emailexets')], 444);
        }

     

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|string|email|max:255',
            'phone' => 'required',
            'password' => 'required',
            'mohfza' => 'required',
            'city_' => 'required',
            'ather_infoirm' => 'required',
            'igree' => 'required',
        ]);


        $data = regester::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'mohfza' => $request->mohfza,
                'city_' => $request->city_,
                'ather_infoirm' => $request->ather_infoirm,


            ]
        );



        if (!$data->save()) {
            $regestersuccess=false;
            return response()->json(['message' => trans('response.failed'),compact('regestersuccess')], 444);
        }



        $data->save();
        $regestersuccess=true;

        
        return response()->json(['data' => 
        userResource::collection(regester::where('email', '=', $request->email,)->get()) 
        ,compact('regestersuccess')], 444);
    }



    public function login(Request $request)
    {

                $loginsuccess='';
                $request->validate([

                    'email' => 'required',
                    'password' => 'required',
                ]);

                $userinfo = regester::where('email', '=', $request->email)->first();

                if (!$userinfo) {

                            return response()->json(['message' => trans('nooo')], 404);
                }else{

                    if (Hash::check($request->password, $userinfo->password)) {
                $loginsuccess=true;
                    $id_user=  $userinfo->id ;

                        $info = regester::find($id_user);

                        // return response()->json(['message' => trans('user.verification.success'),
                        //                             compact('info','loginsuccess')], 200);

                         return response()->json(['data' =>   userResource::collection(regester::where('id', '=', $id_user,)->get())  ,'stat' => compact('loginsuccess')], 200);                        

                    } else {
                        $loginsuccess=false;

                        return response()->json(['message' => trans('411111') , compact('loginsuccess')], 404);
                    }
                
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
            $updatesuccess=false;
            return response()->json(['message' => trans('response.failed'),compact('updatesuccess')], 444);
        }else{


            $updatesuccess=true;
            return response()->json(['data' => 
        userResource::collection(regester::where('email', '=', $request->email,)->get()) 
        ,compact('updatesuccess')], 200);


        }
   }

    public function editpassword(Request $request){
        $request->validate([
            'id' =>'required',
            'password' =>'required',
             ]);


        $id_clint=$request->id;
       
     
        $add=  regester::where('id', '=', $id_clint)->update([
            'password' =>Hash::make( $request->password),
        ]);

        if (!$add) {
            $updatesuccess=false;
            return response()->json(['message' => trans('response.failed'),compact('updatesuccess')], 444);
            
           }else{
            $updatesuccess=true;
            return response()->json(['data' => 
            userResource::collection(regester::where('id', '=', $request->id,)->get()) 
            ,compact('updatesuccess')], 200);
        
           }
    }


    /************************************************* user */

}
