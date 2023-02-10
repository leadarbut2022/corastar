<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Session\Session as HttpFoundationSessionSession;

use Illuminate\Support\Facades\DB;
use App\Models\caed_interim;
use App\Models\card_shopping;
use App\Models\prodect;




use Illuminate\Http\Request;

class Addcard extends Controller
{

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


   

        if($request->size < 1){


            $searchTerm=$request->type;
            $searchTerm_7=7;
            $searchTerm_2=2;
            $searchTerm_3=3;
            $searchTerm_4=4;
            $searchTerm_5=5;
            $searchTerm_6=6;



            $id= $request->id;

            $prodect = prodect::find($id);

            $id_clint=session()->get('logeduser');
    
            $select_all=caed_interim::where('id_clint', '=', $id_clint)->get();

            $all= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
            $techert= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_7}%") ->latest()->paginate(4);
            $all_2= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_2}%") ->latest()->paginate(4);
            $all_3= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_3}%") ->latest()->paginate(4);
            $all_4= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_4}%") ->latest()->paginate(4);
            $all_5= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_5}%") ->latest()->paginate(4);
            $all_6= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_6}%") ->latest()->paginate(4);

            $zise='الرجاء اختيار المقاس';
           
            
            return view('viewAll/view_prodect',compact('prodect','all','techert','all_2','all_3','all_4','all_5','all_6','zise'));
              
            // return back()-with(compact('prodect','all','techert','all_2','all_3','all_4','all_5','all_6'));

        }



     
        
        $d = $request->id;
if (caed_interim::where('id_pro', $d)->count() > 0) {

    $searchTerm=$request->type;
    $searchTerm_7=7;
    $searchTerm_2=2;
    $searchTerm_3=3;
    $searchTerm_4=4;
    $searchTerm_5=5;
    $searchTerm_6=6;



    $id= $request->id;

    $prodect = prodect::find($id);

    $id_clint=session()->get('logeduser');

    $select_all=caed_interim::where('id_clint', '=', $id_clint)->get();

    $all= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
    $techert= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_7}%") ->latest()->paginate(4);
    $all_2= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_2}%") ->latest()->paginate(4);
    $all_3= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_3}%") ->latest()->paginate(4);
    $all_4= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_4}%") ->latest()->paginate(4);
    $all_5= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_5}%") ->latest()->paginate(4);
    $all_6= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_6}%") ->latest()->paginate(4);
    
    $added='موجود بالفعل';
    return view('viewAll/view_prodect',compact('prodect','all','techert','all_2','all_3','all_4','all_5','all_6','added'));
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

    caed_interim::create(

            [

                'clint_name' => $request->name_clint,
                 'clint_addres' => $request->name_address,
                 'clint_phone' => $request->name_phone,
                 'name_prod' => $request->name_prod,
                 'discription' => $request->discription,
                 'type_' => $request->type_,
                 'id_pro' => $request->id,
                 'img'=> $request->img,
                 'avelb'=> $request->many,                              
                 'prise' => $request->prise,
                 'size' => $size ,
                 'id_tager' => $request->id_tager,
                 'id_clint' => $request->id_clint,
                            
             ]);


          
     
        card_shopping::create(
                [

                    'clint_name' => $request->name_clint,
                    'clint_addres' => $request->name_address,
                    'clint_phone' => $request->name_phone,
                     'name_prod' => $request->name_prod,
                     'discription' => $request->discription,
                     'type_' => $request->type_,
                     'id_pro' => $request->id,
                     'img'=> $request->img,
                     'avelb'=> $request->many, 
                     'prise' => $request->prise,
                     'size' => $size ,
                     'id_tager' => $request->id_tager,
                     'id_clint' => $request->id_clint,
                    
                 ]);
        
                //  if (Session::has('num_rows')) {
                //     return back()->with('added','تمت الاضافة  الي سلة المشتريات');
                //  }
                //  return redirect('show_num_card');
                $id_clint=session()->get('logeduser');
            
                $select_num=caed_interim::where('id_clint',  $id_clint)->count();
                session()->put('numroes',$select_num);



                $searchTerm=$request->type;
                $searchTerm_7=7;
                $searchTerm_2=2;
                $searchTerm_3=3;
                $searchTerm_4=4;
                $searchTerm_5=5;
                $searchTerm_6=6;
            
            
            
                $id= $request->id;
            
                $prodect = prodect::find($id);
            
                $id_clint=session()->get('logeduser');
            
                $select_all=caed_interim::where('id_clint', '=', $id_clint)->get();
            
                $all= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
                $techert= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_7}%") ->latest()->paginate(4);
                $all_2= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_2}%") ->latest()->paginate(4);
                $all_3= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_3}%") ->latest()->paginate(4);
                $all_4= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_4}%") ->latest()->paginate(4);
                $all_5= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_5}%") ->latest()->paginate(4);
                $all_6= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_6}%") ->latest()->paginate(4);
                
      
                return view('viewAll/view_prodect',compact('prodect','all','techert','all_2','all_3','all_4','all_5','all_6'))->with('added','تمت الاضافة  الي سلة المشتريات');
        }



     
    }



    // public function show_num_card(Request $request){

     
    // $id_clint=session()->get('logeduser');
            
    //     $select_num=caed_interim::table('CaedInterim')->where('id', '=', $id_clint)->get();
    //     Session::set('num_rows', $select_num);
        
    // }   DB::table('Comments')->where('post_id', '=', $id)



    public function  show_card(Request $request){
        $id_clint=session()->get('logeduser');
    
        $select_all=caed_interim::where('id_clint', '=', $id_clint)->get();

         return view('/card/show',compact('select_all'));
    }



    public function delet(Request $request)
    {   $id_pro=$request->id_pro;
        caed_interim::where('id_pro', $id_pro)->delete();
        card_shopping::where('id_pro', $id_pro)->delete();
        $id_clint=session()->get('logeduser');
    //    $id_clint=$request->lol;
        $select_all=caed_interim::where('id_clint', '=', $id_clint)->get();
        $select_num=caed_interim::where('id_clint',  $id_clint)->count();
        session()->put('numroes',$select_num);
         return view('/card/show',compact('select_all'));
    }

    public function deletall_itarm(Request $request){    
        
        $id_clint=session()->get('logeduser');

        
       $one= $request->id;

       if( card_shopping::where('id_clint', '=', $id_clint)->update(['stat' => $one])){
        
       

        
        caed_interim::where('id_clint', $id_clint)->delete();
    //    $id_clint=$request->lol;
       
        $select_num=caed_interim::where('id_clint',  $id_clint)->count();
        session()->put('numroes',$select_num);
         return redirect('/shop');
       }
    }

    public function check_out_ofline(Request $request){

          return view('card/sheckuot_off_line');

    }

    public function all_orders_clint_have(Request $request){

        $id_clint=session()->get('logeduser');
        $select_all=card_shopping::where('id_clint', '=', $id_clint)->get();

        return view('clint/all_orders',compact('select_all'));
            
  }


}
