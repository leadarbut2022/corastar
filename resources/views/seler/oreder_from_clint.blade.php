
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/fot_tager/order_from_clint.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
      body{
        background-color: #002B5B;  color: white;
      }
      
      body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
         color: black;
      }
      
      a:hover{
        color: black;
        text-decoration: none;
      }
      
      
      
      </style>
    <title>الطلبات من العميل</title>
</head>
<body>
    



<div class="container">
    
    <br><br><br><br>
    <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('profile_seler') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
 <br><br>



 @foreach ($all_post as $i)
     
 
@php
    
     $stats_from_sit='قبول';
   
     if ($i->stat_tag >0) {
        $stats_from_sit='تم القبول';
     }



@endphp



{{-- SELECT `id`, ``, `id_tager`, ``, `discription`, `img`, `type_`, `prise`, `avelb`, `id_clint`, `stat`, `created_at`, `updated_at` FROM `card_shoppings` WHERE 1 --}}



<table class="table table-dark">
  <thead>
    <tr><th scope="col"> حاله المنتج</th>
      <th scope="col">اسم المنتج</th>
      <th scope="col"> المقاس</th>
      <th scope="col">السعر</th>
      <th scope="col">وقت الطلب</th>
      <th scope="col">الكميه المطلوبه </th>
      <th scope="col">اسم العميل</th>
      <th scope="col"> عنوان العميل</th>
      <th scope="col"> هاتف العميل</th>
      <th scope="col">صوره المنتج</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
    <td>
     <form action="allw_order" method="POST">
        @csrf
      <input type="hidden" name="id_pro" value=" {{ $i->id_pro }}">
      <input type="submit" name="update"  value=" {{ $stats_from_sit }}">
     </form>     
   </td>
      <td>  {{ $i->name_prod }} </td>
      <td> {{ $i->size }} </td>
      <td> {{ $i->prise  }}</td>
      <td> {{ $i->created_at  }}</td>
      <td>{{ $i->avelb }}</td>
      <td>{{ $i->clint_name }}</td>
      <td>{{ $i->clint_addres }}</td>

      <td>{{ $i->clint_phone }}</td>




      <td> <img style="width: 100px;" src="{{ $i->img }}" alt="photo"></td>

       

 



   <script>
function clickEventHandler(event) {

    if (!event) {
        event = window.event; 
    };

    var el = (event.target || event.srcElement); // DOM uses 'target';
                                                 // older versions of 
                                                 // IE use 'srcElement'
    el.setAttribute('value', ' تم القبول');

}
</script>







    </tr>
    

  </tbody>
  @endforeach

</div>
</body>
</html>