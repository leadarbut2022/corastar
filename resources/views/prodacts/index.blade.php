





  @extends('layout.navbar')


  
    @section('gols')

<style>
  body{
    background-color: #002B5B;  color: white;
  }
  
  body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
     color: white;
  }
  
  a:hover{
    color: yellow;
    text-decoration: none;
  }
  .heder{
    display: none;
  }
  
  
  
  </style>
<!-- endinject -->
<title>Document</title>
</head>
<body style="">



<div class="container-scroller">
    <div class="main-panel">


  <!-- partial:partials/_navbar.html -->
  <header id="header" >
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        
        <div class="navbar-bottom">
          <div class="d-flex justify-content-between align-items-center" style="height: 71px;">
          <div class="logo">

            <a class="navbar-brand" href="#"
            ><img src="/img/LogoMakerCa-1667496149970.png" alt="cora star"
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
                     @if (Session::get('logeduser') > 0 || Session::get('logeduserseler') >0 || Session::get('logednewsPoster') >0  || Session::get('adminID') > 0)
                            @if (Session::get('logeduser') > 0)

                                

                                  <li class="nav-item">
                                    <a href="signout" id="log" class="nav-link">تسجيل الخروج </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="profile" id="log" class="nav-link" style="font-size: 44px; color:aliceblue;">  <i class="ri-account-pin-circle-fill"></i> </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="https://api.whatsapp.com/send?phone=01556426263" style="font-size: 44px; color:aliceblue;"><i class="ri-whatsapp-line"></i></a>
                                  </li>
                               
                            @endif
                            @if (Session::get('logeduserseler') > 0)

                                  
                                  <li class="nav-item">
                                    <a href="signoutSeler" id="log" class="nav-link">تسجيل الخروج </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="profile_seler" id="log" class="nav-link" style="font-size: 44px; color:aliceblue;">  <i class="ri-account-pin-circle-fill"></i> </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="https://api.whatsapp.com/send?phone=01556426263" style="font-size: 44px;"><i class="ri-whatsapp-line"></i></a>
                                  </li>

                            @endif
                            @if (Session::get('logednewsPoster') > 0)

                                
                                    <li class="nav-item">
                                      <a href="signoutPoster" id="log" class="nav-link">تسجيل الخروج </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="createPost" id="log" class="nav-link" style="font-size: 44px; color:aliceblue;">  <i class="ri-account-pin-circle-fill"></i> </a>
                                  </li>

                            @endif


                            @if (Session::get('adminID') > 0)

                                
                            <li class="nav-item">
                              <a href="logoutadmin" id="log" class="nav-link">تسجيل الخروج </a>
                          </li>
                          <li class="nav-item">
                            <a href="dachbord" id="log" class="nav-link" style="font-size: 44px;">  <i class="ri-account-pin-circle-fill"></i> </a>
                          </li>

                      @endif

                     @else

             
                         
                    
                          <li class="nav-item">
                            <a href="login" id="log" class="nav-link">تسجيل الدخول </a>
                        </li>
                        <li class="nav-item">
                            <a href="registration" id="reg" onclick="" class="nav-link"> انشاء حساب </a>
                          
                        </li>
                 @endif
                 <li class="nav-item">
@php
    // $num_rows=session()->get('num_rows');
    
@endphp


              
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




  <!-- partial -->

   <br><br><br><br>
    
   <div class="container">


      <div class="row" style="position: relative">
          <div class="col-12" style="position: absolute;  background-color: #00ADB5; ">
                  <div class="icon"><p class="icon_sp"> <a href="select_all" style="color:green; text-decoration: none;"> <form action="select_all" method="POST">@csrf <button type="submit" style="background: none; border:none;" ><i style="font-size: 31px;position: relative;top: 8px;" class="ri-shopping-cart-line" style="font-size:22px ;"></i> </button></form></a></p></div>
                  <div class="v_pro_num"><span style="color: black"> 
                    
                    @if (Session::get('logeduser') > 0)
                    {{ Session::get('numroes') }} 
                  @endif
                  </span></div style="" >  </div>
          </div>
    </div>

   </div>
<br>
<br>
<br><br>
   {{-- {{ dd(session('logeduser')); }} --}}
    <div class="container">
     




      <script type="text/javascript">
        atOptions = {
          'key' : 'f32103e36b0e782b283e7332389a8188',
          'format' : 'iframe',
          'height' : 250,
          'width' : 300,
          'params' : {}
        };
        document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
      </script>


            <div class="row">
                    <div class="col-12">
                        <div class="fexd">
                          <!--<div class="icon"> <p class="icon_sp"><a href="../user_clint/cardsopping.php" style="color:green; text-decoration: none;"><i class="ri-shopping-cart-line"></i></a></p></div>
                         <div class="v_pro_num"> <span> </span></div style="" ></div> >-->
                      </div>
                    </div>
            </div>

          <div class="row"> 
          <div class="col-12">
            <div class="row justify-content-between">
                  
                  
              <form action="search" method="POST">
                @csrf
                        <div class="col-md-4" style="    margin-bottom: 38px; display: flex;">
                                <select name="type_" id="" class="form-select" aria-label="Default select example">
                                        <option value=""> .....</option>
                                        <option value="2">طقم كامل</option>
                                        <option value="3">تيشيرت</option>
                                        <option value="4">ستارز</option>
                                        <option value="5">شنطه</option>
                                        <option value="6">شورت</option>
                                        <option value="7">اكسسورات رياضيه</option>
                                  </select>    
                        
                            <input style="margin: 7px;" type="submit" class="btn btn-light" value="بحث">
                          </div>


              </form>
            </div>
          </div>
         </div> 
       
 <div class="row" >
                 

     
@foreach ($prodect as $item)
    




          <div class="col-12 col-md-6 col-lg-3">
          <div class="prodect" style=" border: 1px solid darkgrey;
            padding: 9px;
            box-shadow: 2px 2px darkgrey;
            min-height:339px;
            margin-bottom: 26px;

            overflow: hidden;"> 
              
              @php
                  
              $price=$item->prise -$item->discount


              @endphp


                              


                            <div class="img">
                             <div class="des_count"><span class="desPpra" style="color: black"> {{ $item->discount.'ج' }}- </span></div> 
                             <div class="" style="clear: both "></div>     
                             <img src="{{ $item->img }}" alt="">
                              </div> 

                              <div class="pro-text" style="text-align: right; ">

                                      <p class="text-primary">{{ $item->name_prod }}</p>                         
                                      {{-- <p> {{ $item->discription }}</p> --}}
                                      <h3 class="text-info" style=""> {{  $price }} <small>السعر</small></h3> 
                                      <small  class="text-info" style=" text-decoration: line-through;   position: relative;top: -8px;">{{ $item->prise }}</small> 
                                      
                                          @php
                                              $id= $item->id;
                                              $type_= $item->type_;
                                          @endphp                               
                                   <form action="view_prodect" method="POST"> @csrf <input type="hidden" value="{{ $id= $item->id }}" name="id"> <input type="hidden" value="{{ $id= $item->type_ }}" name="type">  <button  style=" position: relative;width: 100%;" type="submit"  value="" class="btn btn-success" >اطلب المنتج الان  </button> </form>           
                           
                              </div>
                


                           
                      
                </div>
            </div> 

            @endforeach
       







        




    </div><!--row2 -->

    {!! $prodect->links() !!}
    
    </div><!--contaner -->
  </div><!--main-panel -->
  {{-- {{ $prodect->links() }} --}}
  {{-- {!! $prodect->links() !!} --}}
  {{-- {!! $prodect->appends(Request::all())->links() !!} --}}
</div><!--container-scroller -->



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


{{-- <script src="js/card.js"></script> --}}


{{-- <!-- inject:js -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

@endsection






