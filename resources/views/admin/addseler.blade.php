
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dachbord">Home</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">

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
  
  
                    
                                
          {{-- <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="تأكيد الرقم السري">
            </div>
          </div> --}}
        
        </div>
        
        <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
      
      </form>
       
            </section>  
  
        </div>
</body>

</html>