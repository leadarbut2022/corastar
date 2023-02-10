<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="../css/index.css">-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="css/marcket.css"> 
<link rel="stylesheet" href="css/footer.css">

<!-- plugin css for this page -->
<!-- <link
rel="stylesheet"
href="../assets/vendors/mdi/css/materialdesignicons.min.css"
/>
<link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" /> -->

<!-- End plugin css for this page -->
<!-- <link rel="shortcut icon" href="../assets/images/favicon.png" /> -->

<!-- inject:css -->
<link rel="stylesheet" href="css/style.css">


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
                     @if (Session::get('logeduser') > 0 || Session::get('logeduserseler') >0 || Session::get('logednewsPoster') >0  || Session::get('adminID') > 0)
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
                               
                            @endif
                            @if (Session::get('logeduserseler') > 0)

                                  
                                  <li class="nav-item">
                                    <a href="signoutSeler" id="log" class="nav-link">تسجيل الخروج </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="profile_seler" id="log" class="nav-link" style="font-size: 44px;">  <i class="ri-account-pin-circle-fill"></i> </a>
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
                                    <a href="createPost" id="log" class="nav-link" style="font-size: 44px;">  <i class="ri-account-pin-circle-fill"></i> </a>
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


<br><br><br><br><br>
<form action="loginPoster" method="POST">
    @csrf
  
    @if (Session::get('fill'))
    <div class="alert alert-danger">
        {{ Session::get('fill') }}
    </div>
@endif
    <div class="container">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" value="{{ Cookie::get('emailpos'); }}" id="form2Example1" name="email" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" value="{{ Cookie::get('passwordpos'); }}" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
    <span class="text-danger">@error('password'){{ $message }} @enderror</span>

  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" name="remember_me" type="checkbox" value="" id="form2Example31" />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

   
  </div>

  <!-- Submit button -->
  <input type="submit" name="login" class="btn btn-primary btn-block mb-4" value="log in">

 
  


  

  </div>
</form>
</div>
</body>
</html>