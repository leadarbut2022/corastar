<?php

namespace App\Http\Controllers;
use App\Models\prodect;
use Illuminate\Http\Request;

class ProdectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $prodect=prodect::latest()->paginate(20);
        return view('prodacts.index',compact('prodect'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // $data = prodect::all();
        // $filename = prodect::file('img')->getClientOriginalName();
        // $data['img'] = $filename;
        if ($request->hasFile('img')) {
            $filename=$request->img;
            $new_fill=time().$filename->getClientOriginalName();
            $filename->move(public_path('img/prodect/'),$new_fill);
        } 



        $request->validate([
           'name_prod' =>'required',
           'type_' =>'required',
           'avelb'=>'required',
           'discription' =>'required',
           'prise' =>'required',
           'id_tager' =>'required',
           'discount'=>'required',
            ]);

      prodect::create(
           [
                'name_prod' => $request->name_prod,
                'discription' => $request->discription,
                'type_' => $request->type_,
                'avelb' => $request->avelb,
                'img'=>'img/prodect/'.$new_fill ,
                'prise' => $request->prise,
                'id_tager' => $request->id_tager,
                'discount' => $request->discount,
               
            ]);
       
        return redirect()->route('prodects.index')->with('sacsess');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

       
 
        
        $i=$request->type_;

        if($i==1){ 
            $searchTerm=1;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
           
        }elseif($i==2){
            $searchTerm=2;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==3){
            $searchTerm=3;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==4){
            $searchTerm=4;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==5){ 
            $searchTerm=5;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
        }elseif($i==6){ 
            $searchTerm=6;
            $prodect= prodect::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
        }else{
            $prodect=prodect::latest()->paginate(20);;
        }
       

        return view('prodacts.index',compact('prodect'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function edit(prodect $prodect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodect $prodect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodect $prodect)
    {
        //
    }
}
