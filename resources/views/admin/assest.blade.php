@php
    $arr=[1];
@endphp

@foreach ($arr as $item)
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dachbord">Home</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>


      
<br><br>
{{-- <div class="container"> --}}

@if ($i == 1)

{{ "التجار" }}


<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">id_nash</th>
        <th scope="col">phone</th>
        <th scope="col">photo</th>
        <th scope="col">mohfza</th>
        <th scope="col">city_</th>
        <th scope="col">ather_infoirm</th>
        <th scope="col">created_at</th>
        <th scope="col">#######</th>
      </tr>
    </thead>

    <tbody>
        @php
                 
            $i=0;
        @endphp
     @foreach ($prodect as $item)
            
       

            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->name  }}</td>
                <td>{{ $item->email  }}</td>
                <td>{{ $item->id_nash  }}</td>
                <td>{{ $item->phone  }}</td>
                <td>{{ $item->photo  }}</td>
                <td>{{ $item->mohfza  }}</td>
                <td>{{ $item->city_  }}</td>
                <td>{{ $item->ather_infoirm  }}</td>
                <td>{{ $item->created_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="1">
                        <input type="hidden" name="i" value="1">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
   
      @endforeach

    </tbody>
  </table>
    @break
@endif

@if ($i == 2)

{{ "العملاء" }}


<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">mohfza</th>
        <th scope="col">city_</th>
        <th scope="col">ather_infoirm</th>
        <th scope="col">created_at</th>
      </tr>
    </thead>

    <tbody>
        @php
                  
            $i=0;
        @endphp
     @foreach ($prodect as $item)
            
       

            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->name  }}</td>
                <td>{{ $item->email  }}</td>
                <td>{{ $item->phone  }}</td>
                <td>{{ $item->mohfza  }}</td>
                <td>{{ $item->city_  }}</td>
                <td>{{ $item->ather_infoirm  }}</td>
                <td>{{ $item->created_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="2">
                        <input type="hidden" name="i" value="2">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
           
      @endforeach

    </tbody>
  </table>


 @php
      break; 
 @endphp 
@endif

@if ($i == 3)

{{ "الناشريين" }}

       
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
    
        <th scope="col">phone</th>


        <th scope="col">created_at</th>
      </tr>
    </thead>

    <tbody>
        @php
                 
            $i=0;
        @endphp
     @foreach ($prodect as $item)
            
    

            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->name  }}</td>
                <td>{{ $item->email  }}</td>
             
                <td>{{ $item->phone  }}</td>
            
                <td>{{ $item->created_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="3">
                        <input type="hidden" name="i" value="3">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
   
      @endforeach

    </tbody>
  </table>
    @break
@endif

@if ($i == 4)

{{ "المنتجات" }}



<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">id_tager</th>
        <th scope="col">name_prod</th>
        {{-- <th scope="col">discription</th> --}}
        <th scope="col">img</th>
        <th scope="col">type</th>
        <th scope="col">prise</th>
        <th scope="col">discount</th>
        <th scope="col">avelb</th>
        <th scope="col">created_at</th>
      </tr>
    </thead>

    <tbody>

        @foreach ($prodect as $item)
        @php
                 
            $i=0;
           
    if ($item->type_ ==2) {
        $type='طقم كامل';
      }elseif ($item->type_ ==3) {
        $type=' تيشيرت';
      }elseif ($item->type_ ==4) {
        $type=' ستارز';
      }elseif ($item->type_ ==5) {
        $type=' شنطه';
      }elseif ($item->type_ ==6) {
        $type=' شورت';
      }elseif ($item->type_ ==7) {
        $type=' >اكسسورات رياضيه';
        
    }
 
        @endphp
    
            
      

            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->id_tager  }}</td>
                <td>{{ $item->name_prod  }}</td>
                {{-- <td>{{ $item->discription  }}</td> --}}
                <td><img style="width: 100px" src="{{ $item->img  }}" alt=""></td>
                <td>{{ $type  }}</td>
                <td>{{ $item->prise  }}</td>
                <td>{{ $item->discount  }}</td>
                <td>{{ $item->avelb  }}</td>
                <td>{{ $item->created_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="4">
                        <input type="hidden" name="i" value="4">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
   
      @endforeach

    </tbody>
  </table>
  @break
@endif

@if ($i == 5)

{{ "الاخبار" }}


<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">id_Poster</th>
        <th scope="col">name_poster</th>
        <th scope="col">addres_post</th>
        <th scope="col">discription</th>
        <th scope="col">img</th>
        <th scope="col">vedo</th>
        
        <th scope="col">day</th>
        <th scope="col">type_</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>

    <tbody>
        @php
                 
            $i=0;
        @endphp
     @foreach ($prodect as $item)
            
    
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->id_Poster  }}</td>
                <td>{{ $item->name_poster  }}</td>
                <td>{{ $item->addres_post  }}</td>
                <td>{{ $item->discription  }}</td>
                <td><img style="width: 100px" src="{{ $item->img  }}" alt=""></td>
                <td><video style="width: 100px"  src="{{ $item->vedo  }}"></video></td>
                <td>{{ $item->day  }}</td>
                <td>{{ $item->type_  }}</td>
                <td>{{ $item->created_at  }}</td>
                <td>{{ $item->updated_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="5">
                        <input type="hidden" name="i" value="5">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
   
      @endforeach

    </tbody>
  </table>
  @break
@endif

@if ($i == 6)

{{ "الطلبات" }}



<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>
        <th scope="col">id_pro</th>
        <th scope="col">id_tager</th>
        <th scope="col">id_clint</th>
        <th scope="col">clint_name</th>
        <th scope="col">clint_addres</th>
        <th scope="col">clint_phone</th>
        <th scope="col">name_prod</th>
        {{-- <th scope="col">discription</th> --}}
        <th scope="col">img</th>
      
        <th scope="col">type_</th>
        <th scope="col">size</th>
        <th scope="col">prise</th>
        <th scope="col">avelb</th>
        <th scope="col">stat</th>
        <th scope="col">stat_tag</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($prodect as $item)
        @php
                 
            $i=0;
            if ($item->type_ ==2) {
        $type='طقم كامل';
      }elseif ($item->type_ ==3) {
        $type=' تيشيرت';
      }elseif ($item->type_ ==4) {
        $type=' ستارز';
      }elseif ($item->type_ ==5) {
        $type=' شنطه';
      }elseif ($item->type_ ==6) {
        $type=' شورت';
      }elseif ($item->type_ ==7) {
        $type=' >اكسسورات رياضيه';
        
    }


    $stat_u ='';
                if ($item->stat > 0) {
                    $stat_u='الطلب قيد التنفيذ';
                }else{
                    $stat_u='العميل لم يؤكد الطلب ';
                }
                    
                $stat_send_from_sit='';
                if ($item->stat_tag >0) {
                    $stat_send_from_sit='تم تأكيد الطلب من خلال التاجر ';
                }else {
                    $stat_send_from_sit='يتم تجهيز وارسال الطلب الان';
                }
        @endphp
    
            

            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->id  }}</td>
                <td>{{ $item->id_pro  }}</td>
                <td>{{ $item->id_tager  }}</td>
                <td>{{ $item->id_clint  }}</td>
                <td>{{ $item->clint_name  }}</td>
                <td>{{ $item->clint_addres  }}</td>
                <td>{{ $item->clint_phone  }}</td>
                <td>{{ $item->name_prod  }}</td>
                {{-- <td>{{ $item->discription  }}</td> --}}
                <td><img  style="width: 100px" src="{{ $item->img  }}" alt=""></td>
                <td>{{ $type ?? '' }}</td>
                <td>{{ $item->size  }}</td>
                {{-- <td>{{ $item->discount  }}</td> --}}
                <td>{{ $item->prise  }}</td>
                <td>{{ $item->avelb  }}</td>
                <td>{{ $stat_u  }}</td>
                <td>{{ $stat_send_from_sit }}</td>
              
                <td>{{ $item->created_at  }}</td>
                <td>{{ $item->updated_at  }}</td>
                <td>
                    <form action="delet_fromadmin" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id  }}">
                        <input type="hidden" name="type" value="6">
                        <input type="hidden" name="i" value="6">
                        <button type="submit">delet</button>
                    </form>
                </td>
            </tr>
   
      @endforeach

    </tbody>
  </table>
  @break
@endif

@php
    $type='';
@endphp

@if ($i == 7)

{{ "تجار الانتظار" }}



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">id_nash</th>
      <th scope="col">phone</th>

      <th scope="col">created_at</th>
      <th scope="col">#######</th>
    </tr>
  </thead>

  <tbody>
      @php
               
          $i=0;
      @endphp
   @foreach ($prodect as $item)
          
     

          <tr>
              <th scope="row">{{ ++$i }}</th>
              <td>{{ $item->id  }}</td>
              <td>{{ $item->name  }}</td>
              <td>{{ $item->email  }}</td>
              <td>{{ $item->id_nash  }}</td>
              <td>{{ $item->phone  }}</td>

              <td>{{ $item->created_at  }}</td>
              <td>
                  <form action="delet_fromadmin" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="{{ $item->id  }}">
                      <input type="hidden" name="type" value="7">
                      <input type="hidden" name="i" value="7">
                      <button type="submit">delet</button>
                  </form>
              </td>
          </tr>
 
    @endforeach

  </tbody>
</table>
  @break
@endif






















</div>
</body>
</html>






@endforeach
















