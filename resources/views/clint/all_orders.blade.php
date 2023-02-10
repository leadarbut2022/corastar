<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/marcket.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/card.css">
    <!-- plugin css for this page -->
    <link 
    rel="stylesheet"
    href="assets/vendors/mdi/css/materialdesignicons.min.css" 
    />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" /> 

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <title>Document</title>
</head>
<body>
  <style>
    body{
      background-color: #222831;  color: white;
    }
    
    body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
       color: white;
    }
    
    a:hover{
      color: yellow;
      text-decoration: none;
    }
    
    
    
    </style>
         <div class="container">
<br><br><br><br>
<div class="d-flex flex-row align-items-center"><a style="  color: black; " href="profile"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
<br><br>
             <div class="row">
  
            


@foreach ($select_all as $p)
    
{{-- ``, ``, ``, `type_`, ``, `avelb`, `id_clint`, ``, ``, `created_at`, `updated_at`, `clint_name`, `clint_addres`, `clint_phone` --}}


@php

                $stat_u ='';
                if ($p->stat > 0) {
                    $stat_u='الطلب قيد التنفيذ';
                }else{
                    $stat_u='العميل لم يؤكد الطلب ';
                }
                    
                $stat_send_from_sit='';
                if ($p->stat_tag >0) {
                    $stat_send_from_sit='تم تأكيد الطلب من خلال التاجر ';
                }else {
                    $stat_send_from_sit='يتم تجهيز وارسال الطلب الان';
                }

@endphp
           
@php
$type='';
if ($p->type_ ==2) {
    $type='طقم كامل';
  }elseif ($p->type_ ==3) {
    $type=' تيشيرت';
  }elseif ($p->type_ ==4) {
    $type=' ستارز';
  }elseif ($p->type_ ==5) {
    $type=' شنطه';
  }elseif ($p->type_ ==6) {
    $type=' شورت';
  }elseif ($p->type_ ==7) {
    $type=' >اكسسورات رياضيه';
    
}

$prise= $p->prise- $p->discount;
@endphp

<div class="col-12 col-md-3">
                <div class="prodect">
                   
                                  <div class="img">
                                      <img src="{{ $p->img }}" alt="photo">
                                  </div> 

                                  <div class="pro-text">

                                          <p class="text-primary"> {{ $p->name_prod }}</p>                         
                                          {{-- <p>{{ $p->discription   }}</p> --}}
                                          <p> {{ $type }}</p>
                                          <h3 class="text-info" style=""> {{ $prise  }}</h3>
                                          <p class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;"> {{ $p->prise  }}</p>
                                          <p class="text-info" style="">  {{ $p->created_at }} </p> 
                                          <p class="text-info" style=""> {{ $stat_u }} </p> 
                                        
                                         
                                         
                                                                                
                                        <a  style="color:black;"><button  style="  position: relative;width: 100%;"   class="btn btn-success" >@php
                                            
                                        
                                        // $st= '';
                                        // if($p->stat_send_from_sit > 0){
                                        //   $st ='تم تنفيذ الطلب';
                                        // }else{
                                        //     $st='الطلب قيد التنفيذ';
                                        // }
                                        // echo $st; 
                                        @endphp   {{ $stat_send_from_sit  }}
                                        
                                       </button></a>              
                                  
                                  </div>
                       
                          </div>
                     </div>
                 

                     @endforeach
               
             </div>
         </div>
         


</body>
</html>
