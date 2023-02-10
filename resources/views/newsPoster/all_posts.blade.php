<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Document</title>
</head>
<body>
    

 
  



<div class="container">
<br><br><br>
<div class="d-flex flex-row align-items-center"><a style="  color: black; " href="/news"><i class="fa fa-long-arrow-left"></i><span class="ml-2">  الرجوع </span></a></div>
<br><br><br>


</div>






@php
$i=0;
@endphp 




<div style="overflow-y: scroll">





<table class="table table-bordered">
  <thead>
    <tr>
        <th scope="col"># </th>
      <th scope="col">رقم الخبر</th>
      <th scope="col">رقم الادمن</th>
      <th scope="col">اسم الادمن</th>
      <th scope="col">عنوان الخبر</th>
      <th scope="col">محتوي الخبر</th>
      <th scope="col"> تاريخ الخبر</th>
      
      <th scope="col"> صوره</th>
      <th scope="col"> فديو مرفق</th>
      <th scope="col"> النوع</th>
      <th scope="col"> تاريخ الخبر</th>
      
    
    </tr>
  </thead>

  

  @foreach ($all_post as $item) 
 
  <tbody>
    <tr>
    <td>{{ ++$i }} </td>
      <td > {{ $item->id }} </td>
      <td > {{ $item->id_Poster }} </td>
      <td > {{ $item->name_poster }} </td>
      <td > {{ $item->addres_post }} </td>
      <td > {{ $item->discription }} </td>
      <td > {{ $item->day }} </td>
     
   
   
      <td><img  style="width:80px ; highet: 80px;" src="{{ $item->img }}" alt=""></td>
    <td>  <video width="80" height="80" controls ><source src="{{ $item->vedo }}" type="video/mp4"></video> </td>
   
    
    <td > {{ $item->type_ }} </td>
    <td > {{ $item->created_at }} </td>

    <td>
        <form action="delet_fromPoster" method="post"> @csrf <input type="hidden" name="id" value="{{ $item->id }}" >   <input type="submit"  style="  position: relative;width: 100%;"  name="delet" value="حذف الخبر" class="btn btn-success" > </form>   
      
  
  </td>
    </tr>
  </tbody>
  @endforeach

</table>







          





       
  






</div>
</body>
</html>

</body>
</html>