<?php

namespace App\Http\Controllers;

use App\Models\NEWS;
use App\Models\prodect;

use Illuminate\Http\Request;

class Viwes extends Controller
{
    public function prodect(Request $request ){
        
        $id= $request->id;
        $searchTerm=$request->type;
        $searchTerm_7=7;
        $searchTerm_2=2;
        $searchTerm_3=3;
        $searchTerm_4=4;
        $searchTerm_5=5;
        $searchTerm_6=6;
        $prodect = prodect::find($id);
       
        $all= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
        $techert= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_7}%") ->latest()->paginate(4);
        $all_2= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_2}%") ->latest()->paginate(4);
        $all_3= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_3}%") ->latest()->paginate(4);
        $all_4= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_4}%") ->latest()->paginate(4);
        $all_5= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_5}%") ->latest()->paginate(4);
        $all_6= prodect::query()->where('type_', 'LIKE', "%{$searchTerm_6}%") ->latest()->paginate(4);
        
        // $all=prodect::latest()->paginate(20);
        return view('viewAll/view_prodect',compact('prodect','all','techert','all_2','all_3','all_4','all_5','all_6'));

    }
    

    public function post(Request $request  ){
       
       $id= $request->get('id');
       $type= $request->get('type');
        $news = NEWS::find($id);

        $all=NEWS::latest()->paginate(30);
        $type_sag= NEWS::query()->where('type_', 'LIKE', "%{$type}%")->latest()->paginate(20);

        
      
       return view('viewAll/views_post',compact('news','all','type_sag'));
   }


    public function table(Request $request ){
         $id=$request->id;
        return view('viewAll/view_table',compact('id'));
    }
}
