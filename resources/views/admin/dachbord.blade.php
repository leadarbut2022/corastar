<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/between/cssreg.css">
    <link rel="stylesheet" id="lin_css" href="css/between/reg_clint.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet"  id="list_css" href="css/admin/listv.css">
    <title>Document</title>
</head>
<body>

  <style>

    a{
text-decoration: none;
color: black
    }



   
  </style>
    {{-- <script>

function  css_list() {

if ( 1 === 1) {
  document.getElementById("list_css").href="css/admin/listv.css"; 

  
}else{


}
  
}
    </script> --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          {{-- <button onclick="css_list();"></button>
          <a id="list_icon" href="" onclick="css_list();" class="list_icon"><i class="ri-list-unordered"></i></a> --}}
          {{-- <a class="navbar-brand" href="/">Site</a>
          <a class="nav-link active"  aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">{{ Session::get('num_admins') }}</a>
          <a class="nav-link" href="{{ route('logoutadmin') }}">logout</a> --}}
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav" style="display:inline-block;">
              <li class="nav-item"style="display:inline-block;">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item"style="display:inline-block;">
                <a class="nav-link" href="#">{{ Session::get('num_admins') }}</a>
              </li>
              <li class="nav-item" style="display:inline-block;">
                <a class="nav-link" href="{{ route('logoutadmin') }}">logout</a>
              </li>
            
            </ul> --}}
          </div>
        </div>
      </nav>


      <br>
      <br>


     

          
      <div class="container" style="display: flex;">



        <div class="row_list">

          <ul>
           <li class="list-group-item">
            <h6><i class="ri-home-7-line"></i></h6>
            <a class="navbar-brand" href="/">Site</a>
            </li> 
{{--      
                <li class="list-group-item"><h6><i class="ri-user-3-line"></i></h6> <a class=""  aria-current="page" href="#">Home</a></li> --}}
                <li class="list-group-item"> <h6><i class="ri-user-3-line"></i></h6> <a href="addseler">اضافه تاجر</a></li>
                <li class="list-group-item"> <h6><i class="ri-user-3-line"></i></h6> <a href="addposter">اضافه ناشر</a></li>
                <li class="list-group-item"> <h6><i class="ri-user-3-line"></i> </h6><a href="addadminpage">اضافة مدير</a></li>
                  {{-- <li class="list-group-item"><h6><i class="ri-user-3-line"></i></h6> <a class="" href="#">{{ Session::get('num_admins') }}</a></li> --}}
                    <li class="list-group-item">  <a class="" href="{{ route('logoutadmin') }}">logout</a></li>

          </ul>

        </div>

        <div class="row_body">

        
        

     <div class="row">
     
     <div class="list_page"></div>



      <div class="col-md-12 col-12"><div class="heder_head">  <h1>الرئيسية</h1></div></div>


                     {{-- <div class="row"> 
                <div class=" col-12">
                 <div class="chat">
                        <div class="num">2</div>
                        <span><i class="ri-account-pin-circle-fill"></i></span>
                        <p>name</p>
                        <small>date</small>
                        <form action="chat" method="POST" class="form_chat">
                            @csrf
                            <input type="hidden">
                            <button type="submit" value=""><i class='ri-reply-line'></i></button>
                        </form>

                        
                    </div>
                </div>  
           </div> --}}


           <hr>
          
      <div class="col-md-12 col-12"><div class="spss_site">  <h3>الاحصائيات</h3></div></div>




           <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="7"><button type="submit"><p> في قائمه الانتظار عدد التجار</p>  <h2>{{ Session::get('num_whete') }}</h2></button></form></div></div>



        

      
            
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="1"><button type="submit"><p>عدد التجار</p>  <h2>{{ Session::get('num_selers') }}</h2></button></form></div></div>
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="2"><button type="submit"><p>عدد العملاء</p>  <h2>{{ Session::get('num_clint') }}</h2></button></form></div></div>
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="3"><button type="submit"><p>عدد الناشريين</p>  <h2>{{ Session::get('num_posters') }}</h2></button></form></div></div>
               
                
              
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="4"><button type="submit"><p>عدد المنتجات</p>  <h2>{{ Session::get('num_prodects') }}</h2></button></form></div></div>
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="5"><button type="submit"><p>عدد الاخبار</p>  <h2>{{ Session::get('num_postes') }}</h2></button></form></div></div>          
                    <div class="col-md-3 col-12"><div class="vew_stat"><form action="assest" method="POST"> @csrf <input type="hidden" name="i" value="6"><button type="submit"><p>عدد الطلبات</p>  <h2>{{ Session::get('num_req') }}</h2></button></form></div></div>      
              



       
        </div>
     </div>


    </div>

 
  </div>




    <div class="container" style="width: 600px;">

<br>
<br>
<br>
<br>
{{-- <br>
 <section id="reg_clint" class="reg_clint">     
                            
                  


 

  <div class="panel-heading">

    <h3 class="panel-title">انشاء حساب تاجر  </h3>
   </div>
   <div class="panel-body">
    <form action="storevaldate" method="POST">
                  @csrf
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder=" اسم العميل">
                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
          </div>
        </div>
      
      </div>

      <div class="form-group">
        <input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                      <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            
    </div>
  
    <div class="form-group">
        <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="رقم الهاتف مكون من 11 رقم">
                      <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
      
      </div>
      <div class="form-group">
        <input type="text" name="id_nash" id="phone" class="form-control input-sm" placeholder=" رقم البطاقه     ">
                      <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
      
      </div>

                  <div class="form-group">
                                  <input type="text" name="mohfza" id="phone" class="form-control input-sm" placeholder=" اسم المحافظة">
                                <label> <span class="text-danger">@error('mohfza'){{ $message }} @enderror</span> </label> 
                              </div>
                              <div class="form-group">
                                  <input type="text" name="city_" id="phone" class="form-control input-sm" placeholder=" اسم المدينة">
                                <label> <span class="text-danger">@error('city_'){{ $message }} @enderror</span> </label> 
                              </div>
                              <div class="form-group">
                                  <input type="text" name="ather_infoirm" id="phone" class="form-control input-sm" placeholder=" تفاصيل العنوان ">
                                <label>  <span class="text-danger">@error('ather_infoirm'){{ $message }} @enderror</span></label> 
                              </div>

      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                          </div>
        </div>


                  
      
      
      </div>
      
      <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
    
    </form>
     
          </section>  













<br>
<br>
<br>

<br>
<section id="reg_clint" class="reg_clint">     
                           
                 




 <div class="panel-heading">

   <h3 class="panel-title">انشاء حساب ناشر  </h3>
  </div>
  <div class="panel-body">
   <form action="registrationPoster_preson" method="POST">
                 @csrf
     <div class="row">
       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
           <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder=" اسم العميل">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
         </div>
       </div>
     
     </div>

     <div class="form-group">
       <input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                     <span class="text-danger">@error('email'){{ $message }} @enderror</span>
           
   </div>
 
   <div class="form-group">
       <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="رقم الهاتف مكون من 11 رقم">
                     <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
     
     </div>
 
        
     <div class="row">
       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
           <input type="password" name="password" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                             <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                         </div>
       </div>


                 
                             
     
     
     </div>
     
     <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
   
   </form>
    
         </section>  

          <br>
          <br>
          <br>
          <br>
          <br>




 <section id="reg_clint" class="reg_clint">     
                            
                  


 

  <div class="panel-heading">

    <h3 class="panel-title">انشاء حساب admin  <small></small></h3>
   </div>
   <div class="panel-body">
    <form action="addAdmin" method="POST">
                  @csrf
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder=" اسم العميل">
                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
          </div>
        </div>
      
      </div>

      <div class="form-group">
        <input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                      <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            
    </div>
  


          

      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                          </div>
        </div>


   
      </div>
      
      <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
    
    </form>
      
          </div>
          </section>   --}}

    </div>

    <script src="js/admin/admin.js"></script>
</body>
</html>