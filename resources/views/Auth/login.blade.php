
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
   <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/between//log.css">
     <link rel="stylesheet" id="lin_css" href="css/between/log_clint.css">
    <title>Document</title>
</head>
<body style="color: black">















                 <!-- partial:partials/_navbar.html -->
                 <header id="header">
                    <div class="container">
                      <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-top">
                          <div class="d-flex justify-content-between align-items-center">
                            <ul class="navbar-top-left-menu">
                       
                            <ul class="navbar-top-right-menu">
                              <li class="nav-item">
                                <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                          
                            </ul>
                          </div>
                        </div>
                        <div class="navbar-bottom">
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
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
                                    <a class="nav-link" href="{{ route('prodects.index') }}">المتجر</a>
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
                                </ul>
                              </div>
                            </div>
                            <ul class="social-media">
               
                            </ul>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </header>
          
    <div class="container">
      






   
    <div id="login">
   
        <div class="container">

        <section class="log_clint">
    
            <div id="login-row" class="row justify-content-center align-items-center">

            <div style="width: 51%;">

    <div class="row">
            <div class="a_tag">    
                 <button type="button" onclick="link();" class="btn btn-outline-primary">تسجيل الدخول الي حساب  شخصي</button>
                 <button type="button" onclick="link_tg();" class="btn btn-outline-primary">تسجيل الدخول كحساب تاجر</button></div> 
            </div>
            <h6 class="text-center text- pt-5">تسجيل الدخول الي حساب شخصي</h6>
    </div>      




                            
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form action="custom-login" id="login-form" class="form"  method="POST">
                                       

                                        @if (Session::get('fill'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fill') }}
                                            </div>
                                        @endif
                                        @csrf
                                        <div class="form-group">
                                            <label for="username" class="text-info">البريد الاليكتروني</label><br>
                                            <input type="email" name="email" id="number" value="{{ Cookie::get('email'); }}" class="form-control">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">كلمه المرور</label><br>
                                            <input type="text" name="password" id="password"  value="{{ Cookie::get('password'); }}" class="form-control">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="remember-me" class="text-info"><span style="color: black">تذكرني</span> <span><input id="remember-me" name="remember_me" type="checkbox"></span></label><br>
                                            <input type="submit" name="log_clint" class="btn btn-info btn-md btn-block" value="submit">
                                        </div>
                                        <div class="form-group row">
                                          {{-- <div class="col-md-6 offset-md-4">
                                              <div class="checkbox">
                                                  <label>
                                                      <a href="{{ route('shoe_pass_page_reset') }}">تغيير كلمه السر</a>
                                                  </label>
                                              </div>
                                          </div> --}}
                                            {{-- <a href="{{ route('shoe_pass_page_reset') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
                                              <strong>Facebook Login</strong>
                                            </a>  --}}
                                      </div>
                                        <div id="register-link" class="text-right">
                                            <a href="{{ route('registration') }}" class="text-info" style="color: black">او يمكنك انشاء حساب</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                </section>




    <section class="log_tager">




    <div id="login-row" class="row justify-content-center align-items-center">

<div style="width: 51%;">

<div class="row">
<div class="a_tag">    
     <button type="button" onclick="link();" class="btn btn-outline-primary">تسجيل الدخول الي حساب  شخصي</button>
     <button type="button" onclick="link_tg();" class="btn btn-outline-primary">تسجيل الدخول كحساب تاجر</button></div> 
</div>
<h6 class="text-center text- pt-5">تسجيل الدخول الي حساب تاجر</h6>
</div>      




                           
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="loginSeler" method="post">
                                        @csrf
                                        <h3 class="text-center text-info"></h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info"> البريد الاليكتروني:</label><br>
                                            <input type="email" value="{{ Cookie::get('emailsel'); }}" name="email" id="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">كلمة السر</label><br>
                                            <input type="text" value="{{ Cookie::get('passwordsel'); }}" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="remember-me" class="text-info"><span  style="color: black">تذكرني</span> <span><input id="remember-me" name="remember_me" type="checkbox"></span></label><br>
                                            <input type="submit" name="log_tagrt" class="btn-block btn btn-info btn-md" value="submit">
                                        </div>
                                        <div class="form-group row">
                                          {{-- <div class="col-md-6 offset-md-4">
                                              <div class="checkbox">
                                                  <label>
                                                      <a href="shoe_pass_page_reset">تغيير كلمه السر</a>
                                                  </label>
                                              </div>
                                          </div> --}}
                                      </div>
                                        <div id="register-link" class="text-right" style="color: black">
                                            <a href="registration" class="text-info" style="color: black">او يمكنك انشاء حساب </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                </section>





















            </div>
        </div>
    </div>

   

    </div>
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






       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- inject:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- plugin js for this page -->
      <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
      <!-- End plugin js for this page -->
      <!-- Custom js for this page-->
      <script src="./assets/js/demo.js"></script>
      <script src="./assets/js/jquery.easeScroll.js"></script>
      <!-- End custom js for this page-->
    
        <script src="js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    

 <script src="js/between/log.js"></script>

</body>
</html>

