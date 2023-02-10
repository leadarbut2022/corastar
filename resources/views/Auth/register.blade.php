
<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link rel="stylesheet" href="..../css/php/reg.css"> -->
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/footer.css">
       
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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/between/cssreg.css">
    <link rel="stylesheet" id="lin_css" href="css/between/reg_clint.css">
    
   
    <title>Document</title>
    </head>
<body style="background-color:azure;">
    <div class="container">
       

    </div>












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
                                ><img  style="      position: relative; top: -37px;" src="/img//icons8-soccer-ball-96.png" alt="cora star"
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

<br><br><br><br>
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
                                                            <div class="row">
                                                    <div class="col-12"> 
                                                        <div class="a_tag"> 
                                                        <button type="button"id="clint_" onclick="link();" class="btn btn-outline-primary">انشاء حساب شخصي</button>
                                                        <button type="button" id="tager_"  onclick="link_tg();" class="btn btn-outline-primary">انشاء حساب تاجر </button>
                                                                    <a  href=""> </a>
                                                                <a href=""> </a>
                                                        </div>   
                                                </div>
                  
                  
                                            </div>


 <section id="reg_clint" class="reg_clint">     
                            
                  


 

        		<div class="panel-heading">

			    		<h3 class="panel-title">انشاء حساب شخصي  <small></small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="custom-registration" method="POST">
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
			    				<input type="text"  name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
			    			      
							</div>
						
							<div class="form-group">
			    				<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="رقم الهاتف مكون من 11 رقم">
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
			    						<input type="password" name="password" id="password_reg" class="form-control input-sm" placeholder="الرقم السري">
			    						<button
                      type="button"
                      
                      style="
                          width: 30px;
    padding: 0px;
    position: absolute;
    top: 2px;
    right: 0px;
                      "
                      id="bt_show" class="form-control input-sm" placeholder="">show</button>

                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                    </div>
			    				</div>


                            
                                        
			    				{{-- <div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_reg_con" class="form-control input-sm" placeholder="تأكيد الرقم السري">
			    					</div>
			    				</div> --}}

                 <br><br>
                  <div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="checkbox"
                      style="    height: 12px;
                      width: 20px;
                      position: absolute;
                      right: 55%;"
                      name="igree" id="igree" class="form-control input-sm" placeholder=""><span> <a href="pri">اوافق علي الشروط والأحكام   </a></span>
                     
			    					
                    </div>
			    				</div>
                  <span class="text-danger">@error('igree'){{ $message }} @enderror</span>
			    			

								
			    			</div>
			    			
			    			<input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
			    		
			    		</form>
                      <div style="text-align: center;">  <label> او</label></div>
                      <a href="login">
                        <button type="button" id="tager_"    class="btn btn-primary btn-lg btn-block"> تسجيل الدخول</button>
                        </a>
                    </div>
                    </section>  

<script>
  document.getElementById('bt_show').onclick
      
      =function () {
 
         let input =document.getElementById('password_reg');
       
     
         if (input.type == 'password') {
             input.setAttribute('type','text');
         
             document.getElementById('bt_show').innerText='hide';
         }else{
             input.setAttribute ('type','password');
          
             document.getElementById('bt_show').innerText='show';
         }
         
     }
</script>


     <section id="reg_tager" class="reg_tager">

      {{-- width: 32px;
      padding: 0px;
      position: absolute;
      top: 0px;
      padding-left: 3px;
      right: 0px;
      padding-top: 3px; --}}



                                <div class="panel-heading">
                                    <h3 class="panel-title">انشاء حساب تاجر <small></small></h3>
                                    </div>
                                    <div class="panel-body">
                                    <form action="registrationSeler" method="POST">
                                        @csrf
                                        
                                            <div class="alert alert-danger">
                                                سوف يتم مراجعه البيانات والتواصل معكم لتأكيد الحساب'
                                            </div>
                                                                            
                                       

                                        @if (Session::get('lol'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fill') }}
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                        <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="First Name">
                                                </div>
                                            </div>
                                        
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                           <label for="">  </label> 
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="id_nash" id="id_nachonal" class="form-control input-sm" placeholder="الرقم القومي">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="رقم التليفون">
                                          <label></label> 
                                        </div>

                                





                                        

                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                                                </div>
                                            </div>
                   
                                         
                                        </div>
                                        
                                        <input type="submit" name="sub_tager" value="انشاء حساب" class="btn btn-info btn-block">
                                    
                                    </form>
                                    
                                    <div style="text-align: center;">  <label> او</label></div>
                                    <a href="login">
                                    <button type="button" id="tager_"  href="log.between.php" class="btn btn-primary btn-lg btn-block"> تسجيل الدخول</button>
			    	                </a>
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

	<script src="js/between/regester.js" ></script>
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
    


</html>
</body>
</html>
