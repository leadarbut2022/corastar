


  @extends('layout.navbar')


 
  
    @section('gols')

  <style>
    body{
      /* background-color: #002B5B;  */
       color: white;
    }
    
    body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
       color: #EEEEEE;
    }
    
    a:hover{
      color: #EEEEEE;
      text-decoration: none;
    }
    .heder{
      display: none;
    }
    
    
    
    </style>





 <header id="header">
           <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light">
               <div class="navbar-top">
                 <div class="d-flex justify-content-between align-items-center">
                   <ul class="navbar-top-left-menu">
                 <!--     <li class="nav-item">
                       <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                     </li>
                     <li class="nav-item">
                       <a href="pages/aboutus.html" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="nav-link">Events</a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="nav-link">Write for Us</a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="nav-link">In the Press</a>
                     </li>-->
                   </ul> 
                   <ul class="navbar-top-right-menu">
                     <li class="nav-item">
                       <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                     </li>
                    
                     <li class="nav-item" style="position: relative;
                     top: 55px;">
                       <a href="{{ route('signout') }}" class="nav-link">تسجيل الخروج</a>
                     </li>
                   </ul>
                 </div>
               </div>
               <div class="navbar-bottom">
                 <div class="d-flex justify-content-between align-items-center">
                   <div>
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
                     
                         <!-- <li class="nav-item">
                           <a class="nav-link" href="../pages/user/profill.php">profill</a>
                         </li> -->
                         <!-- <li class="nav-item">
                           <a class="nav-link" href="pages/politics.html"></a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="pages/travel.html"></a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="pages/contactus.html">Contact</a>
                         </li> -->
                       </ul>
                     </div>
                   </div>
                   <ul class="social-media">
                     <!-- <li>
                       <a href="#">
                         <i class="mdi mdi-facebook"></i>
                       </a>
                     </li>
                     <li>
                       <a href="#">
                         <i class="mdi mdi-youtube"></i>
                       </a>
                     </li>
                     <li>
                       <a href="#">
                         <i class="mdi mdi-twitter"></i>
                       </a>
                     </li> -->
                   </ul>
                 </div>
               </div>
             </nav>
           </div>
         </header>
 
         <section style="background-color:;">
 <div class="container py-5">
   <div class="row">
     <div class="col-lg-4">
       <div class="card mb-4">
         <div class="card-body text-center">
          
             








             <!-- ---------------------- php code----------````````````````````````````````````````````````````````````````````````````````````````````````````````````````````---------------------->
             

        
               
              
               
               
               
             




             
       
            <p style="    font-size: 74px; color: #EEEEEE;"><i class="ri-account-circle-fill"></i></p>
           <form action="edit_profile_page">  @csrf  <input type="hidden" value="{{ Session::get('logeduser') }}" name="id"> <input type="submit" value="تعديل الملف الشصي" class="btn btn-success"></form> 
           <h5 class="my-3"></h5>
          
          
           <div class="d-flex justify-content-center mb-2">
             <!-- <button type="button" class="btn btn-primary">اضافة منتج</button> -->
          <!-- echo" <a href='../ownerprodects/create.php?id=".$id2."' class='btn btn-primary'>اضافة منتج   </a>" ?> -->
          <?php echo" <a href='all_orders_clint_have' class='btn btn-primary ms-1'>اظهار جميع الطلبات</a>" ?>
  
           </div>
         </div>
       </div>
       <div class="card mb-4 mb-lg-0">
         <div class="card-body p-0">
           <ul class="list-group list-group-flush rounded-3">
             {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               <i class="fas fa-globe fa-lg text-warning"></i>
               <p class="mb-0"></p>
             </li> --}}
             @php
            $adewss= Session::get('mohfzauser').' '.'- '.' -'.Session::get('city_user').' '.'- '.' -'.Session::get('ather_infoirmuser');
             @endphp
             {{-- $request->session()->put('nameUser',$userinfo->name);
             $request->session()->put('phoneuser',$userinfo->phone);
             $request->session()->put('mohfzauser',$userinfo->mohfza);
             $request->session()->put('city_user',$userinfo->city_);
             $request->session()->put('ather_infoirmuser',$userinfo->ather_infoirm); --}}
           </ul>
         </div>
       </div>
     </div>
     <div class="col-lg-8" style="text-align: right;">
       <div class="card mb-4">
         <div class="card-body">
           <div class="row">

             <div class="col-sm-9">
               <p class="text-muted mb-0">{{ Session::get('nameUser') }}</p>
             </div>
             <div class="col-sm-3">
              <p class="mb-0">الاسم</p>
            </div>
           </div>
           <hr>
           <div class="row">

             <div class="col-sm-9">
               <p class="text-muted mb-0">{{ Session::get('mailuser')}} </p>
             </div>
             <div class="col-sm-3">
              <p class="mb-0">البريد الاليكتروني</p>
            </div>
           </div>
           <hr>
           <div class="row">
 
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{ Session::get('phoneuser') }}</p>
             </div>
             <div class="col-sm-3">
              <p class="mb-0">رقم الهاتف</p>
            </div>
           </div>
           
           {{-- <div class="row">
             <div class="col-sm-3">
               <p class="mb-0">Mobile</p>
             </div>
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{ Session::get('numroes') }}</p>
             </div>
           </div> --}}
           <hr>
           <div class="row">
   
             <div class="col-sm-9">
               <p class="text-muted mb-0">{{ $adewss }}</p>
             </div>
             <div class="col-sm-3">
              <p class="mb-0">العنوان</p>
            </div>
           </div>
         </div>
       </div>
       
        
        
     </div>
   </div>
 </div>
</section>


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
<!-- inject:js -->
{{-- <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
 <!-- endinject -->
 <!-- plugin js for this page -->
 <script src="../../assets/vendors/aos/dist/aos.js/aos.js"></script>
 <!-- End plugin js for this page -->
 <!-- Custom js for this page-->
 <script src="../../assets/js/demo.js"></script>
 <script src="../../assets/js/jquery.easeScroll.js"></script>
 <!-- End custom js for this page-->

   <script src="../../js/index.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}

@endsection