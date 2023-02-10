@extends('layout.navbar')




  @section('gols')

<style>
  body{
    background-color: #002B5B;  color: white;
  }
  
  body ,h1,h2,h3,h4,h5,h6,p,small,strong,a {
     color: white;
  }
  
  a:hover{
    color: yellow;
    text-decoration: none;
  }
  .desPpra{
    color: black !important;
  }

  .heder{
    display: none;
  }
  
  
  
  </style>
<!-- endinject -->
<title>Document</title>
</head>
<body>



<div class="container-scroller">
    <div class="main-panel">


  <!-- partial:partials/_navbar.html -->
  <header id="header" >
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-top">
          <div class="d-flex justify-content-between align-items-center">
            <ul class="navbar-top-left-menu">
     
            </ul> 
            <ul class="navbar-top-right-menu">
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
              </li>
              <li class="nav-item">
                <!-- <a href="../valdate_and_regester/log_between.php" id="log" class="nav-link">تسجيل الدخول </a> -->
              </li>
              <li class="nav-item">
                <!-- <a href="../valdate_and_regester/reg_between.php" id="reg" onclick="" class="nav-link"> انشاء حساب </a> -->
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar-bottom">
          <div class="d-flex justify-content-between align-items-center">
          <div class="logo">

             <a class="navbar-brand" href="#"
               ><img src="/img//icons8-soccer-ball-96.png" alt="cora star"
             /></a>
             </div>
           
            
            <div>
              <button
                class="navbar-toggler"
                type="button"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="navbar-collapse justify-content-center collapse"
                id="navbarSupportedContent"
              >
                <ul
                  class="navbar-nav d-lg-flex justify-content-between align-items-center"
                >
                  <li>
                    <button class="navbar-close">
                      <i class="mdi mdi-close"></i>
                    </button>
                    </li>
                    <li class="nav-item active">
                       <a class="nav-link" href="/">الصفحه الرئيسية</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="/shop">المتجر</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="/tabls">الدوريات</a>
                     </li>
                     <!-- <li class="nav-item">
                       <a class="nav-link" href="sport">Sports</a>
                     </li> -->
                     <li class="nav-item">
                       <a class="nav-link" href="/gols">الاهداف</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="/news">الاخبار</a>
                       
                     </li>

                     @if (Session::get('logeduser') > 0)

                                

                     <li class="nav-item">
                       <a href="signout" id="log" class="nav-link">تسجيل الخروج </a>
                     </li>
                     <li class="nav-item">
                       <a href="profile" id="log" class="nav-link" style="font-size: 44px;">  <i class="ri-account-pin-circle-fill"></i> </a>
                     </li>
                       <li class="nav-item">
                       <a href="https://api.whatsapp.com/send?phone=01556426263" style="font-size: 44px;"><i class="ri-whatsapp-line"></i></a>
                     </li>
                  
               @else
                  <li class="nav-item">
                     <a href="login" id="log" class="nav-link">تسجيل الدخول </a>
                 </li>
                 <li class="nav-item">
                     <a href="registration" id="reg" onclick="" class="nav-link"> انشاء حساب </a>
                   
                 </li>

                 @endif
                 <li class="nav-item">

              
                  <div class="fexd">
                    
                    {{-- <div class="icon"><p class="icon_sp"> <a href="select_all" style="color:green; text-decoration: none;"> <form action="select_all" method="POST">@csrf <button type="submit" style="background: none; border:none;" ><i style="font-size: 31px;position: relative;top: 8px;" class="ri-shopping-cart-line" style="font-size:22px ;"></i> </button></form></a></p></div>
                    <div class="v_pro_num"><span> {{ Session::get('numroes') }} </span></div style="" >  </div> --}}
                 </div> 
                       <!-- <span>  </span> -->
                 </li>
             
                </ul>
              </div>
           
            </div>
            <!-- <ul class="social-media">
                 <div class="fexd">
                          <div class="icon"><p class="icon_sp"> <a href="../user_clint/cardsopping.php" style="color:green; text-decoration: none;"><i class="ri-shopping-cart-line"></i></a></p></div>
                          <div class="v_pro_num"><span> </span></div style="" >  </div>
                  </div>  -->
            </ul>
          </div>
          
        </div>
      </nav>
    </div>
  </header>

  <br>
  <br>
  <br>
  <br>
  <br><script type="text/javascript">
    atOptions = {
      'key' : 'f32103e36b0e782b283e7332389a8188',
      'format' : 'iframe',
      'height' : 250,
      'width' : 300,
      'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
  </script>
  <style>

    .pr{
      padding-right: 4%;
    }

    .nots{
      padding-right: 4%;
    }
.pr h2{
  margin-top: 16%;
}
.pr .p1{

}

.pr .p2{

}

.nots h6{
  margin-top: 39%;
}
.nots .p1{
  display: block;
margin: 12px 0px;
}
.nots .p2{
  
}


  </style>
@php
    $id_clint=session()->get('logeduser');

    $prise= $prodect->prise- $prodect->discount;
@endphp

<div class="container">


  <div class="row" style="position: relative">
      <div class="col-12" style="position: absolute ;    background-color: #00ADB5;
      ">
              <div class="icon"><p class="icon_sp"> <a href="select_all" style="color:green; text-decoration: none;"> <form action="select_all" method="POST">@csrf <button type="submit" style="background: none; border:none;" ><i style="font-size: 31px;position: relative;top: 8px;" class="ri-shopping-cart-line" style="font-size:22px ;"></i> </button></form></a></p></div>
              <div class="v_pro_num"><span style="color: black"> {{ Session::get('numroes') }} </span></div style="" >  </div>
      </div>
</div>

</div>
<br>
<br>
<br><br>

<div class="container" style="text-align: right">

      
        <div class="row" style="justify-content: start">

            <div class="col-md-3 col-12" style="overflow: hidden;">
              <div class="img">
                
             
                <img width="100%" src="{{ $prodect->img }}" alt="">
              </div>
            </div>
            <div class="col-md-6 col-12 pr">
                <h2 style="margin-top: 16%;">{{ $prodect->name_prod }}</h2>
                <p class="p1">{{ $prodect->discription }}</p>
                <h3 class="p2">{{ $prise }}</h3>
                <p class="p2"  style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $prodect->prise }}</p>
                <br>


               
               
                <form action="addCard" method="POST" enctype="multipart/form-data">

                  <label>  <span class="text-danger">@error('size'){{ $message }} @enderror</span></label> 
                  {{-- @if (Session::get('size')) --}}
                  <div style="color: black" class="alert alert-success">
                      {{-- {{ Session::get('size') }} --}}
                      {{ @$zise }}
                  </div>
                  {{-- @endif --}}
                  <select name="size" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="">اختار الحجم</option>
                    <option value="1">s</option>
                    <option value="2">m</option>
                    <option value="3">l</option>
                    <option value="4">xl</option>
                    <option value="5">xxl</option>
                 
                </select>
                <br>

                    <label style="position: relative;
                    float: right;
                    top: 0px;
                    margin: 2px 24px;"> -: اختار الكمية</label>
                  @csrf
                  <a style="display: inline-block;
                  width: 25px;
                  height: 25px;
                  border: 2px solid black;
                  text-align: center;
                  position: relative;
top: -6px;">
                  <span id="valBox">1</span>
                </a>
                <script>  function showVal(newVal){
                    document.getElementById("valBox").innerHTML=newVal;
                    document.getElementById("range").setAttribute("value",newVal);
                }
                </script>


{{-- $request->session()->put('nameUser',$userinfo->name);
                  $request->session()->put('phoneuser',$userinfo->phone);
                  $request->session()->put('mohfzauser',$userinfo->mohfza);
                  $request->session()->put('city_user',$userinfo->city_);
                  $request->session()->put('ather_infoirmuser',$userinfo->ather_infoirm); --}}
@php
    $address=Session::get('mohfzauser') .' '. Session::get('city_user') .' '. Session::get('ather_infoirmuser') ;
@endphp


                 <input name="many"  type="range"  min="1" max="10"  id="range" value="1" step="1" oninput="showVal(this.value)" onchange="showVal(this.value)"/>
              <br><br>


                  <input type="hidden" name="name_clint" value="{{ Session::get('nameUser') }}">
                  <input type="hidden"name="name_phone" value="{{ Session::get('phoneuser') }}" >
                  <input type="hidden"name="name_address" value="{{ $address }}" >
                 <input type="hidden" name="name_prod" value="{{ $prodect->name_prod }}">
                 <input type="hidden" name="type_" value="{{ $prodect->type_ }}">
                 <input type="hidden" name="discription" value="{{ $prodect->discription }}">
                 <input type="hidden" name="prise" value="{{ $prise }}">
                
                 <input type="hidden" name="img" value="{{ $prodect->img }}">
                 <input type="hidden" name="id" value="{{ $prodect->id }}">
                 <input type="hidden" name="id_tager" value="{{ $prodect->id_tager }}">
                 <input type="hidden" name="id_clint" value="{{ $id_clint }}">

                 <button type="submit" class="btn btn-block  btn-success">
                
                  @if (@$added > 0)
                  <div class="alert alert-success">
                     {{ $added  }}
                  </div>
                  @else
                  اضافة الي سله المشتريات
                  @endif
                 </button>
           
         
                </form>
            </div>
            <div class="col-md-3 col-12 nots">
                <h6>مدة التوصيل</h6>
                <small class="p1">مده التوصيل من 4 الي 6 ايام عمل   تختلف من محافظه الي اخري</small>
                <small class="p2">ملحوظه::تحسب مده التوصيل من وقت تأكيد الطلب مع العميل</small>
            </div>
        </div>

    </div>

<br>
<br>
<br>
<br>
<br>

    <div class="container">

      <div class="row">
                 
@php
   
@endphp
     
        @foreach ($all as $item)
            
        @php
   

    $prise= $prodect->prise- $prodect->discount;
@endphp 
        
        
        
                  <div class="col-12 col-md-6 col-lg-3">
                  <div class="prodect" style=" "> 
                      
        
        
                                      
        
        
                                    <div class="img">
                                      <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                      <div class="" style="clear: both "></div>   
                                          <img src="{{ $item->img }}" alt="">
                                      </div> 
        
                                      <div class="pro-text">
        
                                              <p class="text-primary">{{ $item->name_prod }}</p>                         
                                              {{-- <p> {{ $item->discription }}</p> --}}
                                              <h3 class="text-info" style="">{{ $prise }}</h3> 
                                              <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                              
                                                  @php
                                                      $id= $item->id;
                                                  @endphp                               
                                        <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"   class="btn btn-success" >اطلب المنتج الان  </button> </form>           
           
                                   
                                      </div>
                        
        
        
                                   
                              
                        </div>
                    </div> 
        
                    @endforeach
               
        
        
        
        
        
        
        
                
        
        
        
        
            </div><!--row2 -->
            {!! $all->links() !!}
    </div>


<div class="container">

  <div class="row">

    @foreach ($techert as $item)
            
        
    @php
   

    $prise= $prodect->prise- $prodect->discount;
@endphp 
         
        
        
                  <div class="col-12 col-md-6 col-lg-3">
                  <div class="prodect" style=" "> 
                      
        
        
                                      
        
        
                                    <div class="img">
                                      <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                      <div class="" style="clear: both "></div>   
                                          <img src="{{ $item->img }}" alt="">
                                      </div> 
        
                                      <div class="pro-text">
        
                                              <p class="text-primary">{{ $item->name_prod }}</p>                         
                                              {{-- <p> {{ $item->discription }}</p> --}}
                                              <h3 class="text-info" style="">{{ $prise }}</h3> 
                                              <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                              
                                                  @php
                                                      $id= $item->id;
                                                  @endphp                               
                                        <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
           
                                   
                                      </div>
                        
        
        
                                   
                              
                        </div>
                    </div> 
        
                    @endforeach
               
  </div></div> <!--  end forech -->





  <div class="container">

    <div class="row">
  
      @foreach ($all_2 as $item)
              
          
      @php
   

      $prise= $prodect->prise- $prodect->discount;
  @endphp 
          
          
          
                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="prodect" style=" "> 
                        
          
          
                                        
          
          
                                      <div class="img">
                                        <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                        <div class="" style="clear: both "></div>   
                                            <img src="{{ $item->img }}" alt="">
                                        </div> 
          
                                        <div class="pro-text">
          
                                                <p class="text-primary">{{ $item->name_prod }}</p>                         
                                                {{-- <p> {{ $item->discription }}</p> --}}
                                                <h3 class="text-info" style="">{{ $prise }}</h3> 
                                                <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                                
                                                    @php
                                                        $id= $item->id;
                                                    @endphp                               
                                          <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
             
                                     
                                        </div>
                          
          
          
                                     
                                
                          </div>
                      </div> 
          
                      @endforeach
                 
    </div></div> <!--  end forech -->


    <div class="container">

      <div class="row">
    
        @foreach ($all_3 as $item)
                
            
            
        @php
   

        $prise= $prodect->prise- $prodect->discount;
    @endphp 
            
            
                      <div class="col-12 col-md-6 col-lg-3">
                      <div class="prodect" style=" "> 
                          
            
            
                                          
            
            
                                        <div class="img">
                                          <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                          <div class="" style="clear: both "></div>   
                                              <img src="{{ $item->img }}" alt="">
                                          </div> 
            
                                          <div class="pro-text">
            
                                                  <p class="text-primary">{{ $item->name_prod }}</p>                         
                                                  {{-- <p> {{ $item->discription }}</p> --}}
                                                  <h3 class="text-info" style="">{{ $prise }}</h3> 
                                                  <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                                  
                                                      @php
                                                          $id= $item->id;
                                                      @endphp                               
                                            <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
               
                                       
                                          </div>
                            
            
            
                                       
                                  
                            </div>
                        </div> 
            
                        @endforeach
                   
      </div></div> <!--  end forech -->

 

      <div class="container">

        <div class="row">
      
          @foreach ($all_4 as $item)
               
          @php
   

          $prise= $prodect->prise- $prodect->discount;
      @endphp 
              
              
              
              
              
                        <div class="col-12 col-md-6 col-lg-3">
                        <div class="prodect" style=" "> 
                            
              
              
                                            
              
              
                                          <div class="img">
                                            <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                            <div class="" style="clear: both "></div>   
                                                <img src="{{ $item->img }}" alt="">
                                            </div> 
              
                                            <div class="pro-text">
              
                                                    <p class="text-primary">{{ $item->name_prod }}</p>                         
                                                    {{-- <p> {{ $item->discription }}</p> --}}
                                                    <h3 class="text-info" style="">{{ $prise }}</h3> 
                                                    <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                                    
                                                        @php
                                                            $id= $item->id;
                                                        @endphp                               
                                              <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
                 
                                         
                                            </div>
                              
              
              
                                         
                                    
                              </div>
                          </div> 
              
                          @endforeach
                     
        </div></div> <!--  end forech -->


        <div class="container">

          <div class="row">
        
            @foreach ($all_5 as $item)
                    
                
            @php
   

            $prise= $prodect->prise- $prodect->discount;
        @endphp 
                
                
                
                          <div class="col-12 col-md-6 col-lg-3">
                          <div class="prodect" style=" "> 
                              
                
                
                                              
                
                
                                            <div class="img">
                                              <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                              <div class="" style="clear: both "></div>   
                                                  <img src="{{ $item->img }}" alt="">
                                              </div> 
                
                                              <div class="pro-text">
                
                                                      <p class="text-primary">{{ $item->name_prod }}</p>                         
                                                      {{-- <p> {{ $item->discription }}</p> --}}
                                                      <h3 class="text-info" style="">{{ $prise }}</h3> 
                                                      <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                                      
                                                          @php
                                                              $id= $item->id;
                                                          @endphp                               
                                                <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
                   
                                           
                                              </div>
                                
                
                
                                           
                                      
                                </div>
                            </div> 
                
                            @endforeach
                       
          </div></div> <!--  end forech -->



          <div class="container">

            <div class="row">
          
              @foreach ($all_6 as $item)
                      
                  
              @php
   

              $prise= $prodect->prise- $prodect->discount;
          @endphp 
                  
                  
                  
                            <div class="col-12 col-md-6 col-lg-3">
                            <div class="prodect" style=" "> 
                                
                  
                  
                                                
                  
                  
                                              <div class="img">
                                                <div class="des_count"><span class="desPpra" style=""> {{ $item->discount.'ج' }}- </span></div> 
                                                <div class="" style="clear: both "></div>   
                                                    <img src="{{ $item->img }}" alt="">
                                                </div> 
                  
                                                <div class="pro-text">
                  
                                                        <p class="text-primary">{{ $item->name_prod }}</p>                         
                                                        {{-- <p> {{ $item->discription }}</p> --}}
                                                        <h3 class="text-info" style="">{{ $prise }}</h3> 
                                                        <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                                        
                                                            @php
                                                                $id= $item->id;
                                                            @endphp                               
                                                  <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
                     
                                             
                                                </div>
                                  
                  
                  
                                             
                                        
                                  </div>
                              </div> 
                  
                              @endforeach
                         
            </div></div> <!--  end forech -->
    <br><br>
    <footer class="site-footer">
      <div class="container">
  
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>
    
          <div class="col-md-4 col-sm-6 col-xs-12">
            {{-- <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul> --}}
          </div>
        </div>
      </div>
    </footer>
    {{-- <script src="js/card.js"></script>


    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
    
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     --}}
    </body>
</body>
</html>


@endsection