<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;


use App\Models\NEWS;
use Illuminate\Http\Request;

class NEWSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    //    $searchTerm=1;
    //    $news= NEWS::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
    //    $news_2=2;
       $makal= NEWS::query()->latest()->paginate(20);

       $flash= NEWS::latest()->paginate(5);
       $flash_2= NEWS::latest()->paginate(12);
       
       return view('home.News',compact('makal','flash','flash_2'));
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
        if ($request->hasFile('img')) {
            $filename=$request->img;
            $new_fill=time().$filename->getClientOriginalName();
            $filename->move(public_path('img/news/'),$new_fill);
        } 
        if ($request->hasFile('vedo')) {
            $vedname=$request->vedo;
            $ved_fill=time().$vedname->getClientOriginalName();
            $vedname->move(public_path('ved/news/'),$ved_fill);

            // $video=$request->ved;
            // $input = time().$video->getClientOriginalExtension();
            // $destinationPath = 'ved/news/';
            // $video->move($destinationPath, $input);

    
        } 



        $request->validate([
           'addres_post' =>'required',
           'discription' =>'required',
           'type_' =>'required',
           'day'=>'required',
          

          

            ]);

            $srcimg='';

            if (@$new_fill >0) {
                $srcimg='img/news/'.@$new_fill;
            }

            $srcvodo='';
            if (@$ved_fill >0) {
                $srcvodo='ved/news/'.@$ved_fill;
            }
            
            

      NEWS::create(
           [
                'addres_post' => $request->addres_post,
                'discription' => $request->discription,
                'type_' => $request->type_,
                'day' => $request->day,
                'img'=>@$srcimg ,
                'vedo'=>@$srcvodo ,
                'id_Poster' => $request->id_Poster,
                'name_poster' => $request->name_poster,

                
               
            ]);
       
        return redirect()->route('/news')->with('sacsess');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NEWS  $nEWS
     * @return \Illuminate\Http\Response
     */
    public function show(NEWS $nEWS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NEWS  $nEWS
     * @return \Illuminate\Http\Response
     */
    public function edit(NEWS $nEWS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NEWS  $nEWS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NEWS $nEWS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NEWS  $nEWS
     * @return \Illuminate\Http\Response
     */
    public function destroy(NEWS $nEWS)
    {
        //
    }
}
