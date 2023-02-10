<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style>
        
        body {
    background-position: center;
    background-color: #eee;
    background-repeat: no-repeat;
    background-size: cover;
    color: #505050;
    font-family: "Rubik",Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.5;
    text-transform: none;
}

.forgot{
	    background-color: #fff;
    padding: 12px;
    border: 1px solid #dfdfdf;
}

.padding-bottom-3x {
    padding-bottom: 72px !important;
}

.card-footer{
	background-color: #fff;
}

.btn{ 

	font-size: 13px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #76b7e9;
    outline: 0;
    box-shadow: 0 0 0 0px #28a745;
}
               
    </style>
    <title>Document</title>
</head>
<body>
    


                            	<div class="container padding-bottom-3x mb-2 mt-5">
                                    <div class="row justify-content-center">
                                      <div class="col-lg-8 col-md-10">
                                        <div class="forgot">
                                            
                                            {{-- <h2>Forgot your password?</h2>
                                        <p>Change your password in three easy steps. This will help you to secure your password!</p> --}}
                                        {{-- <ol class="list-unstyled">
                                          <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                                          <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                                          <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                                        </ol> --}}
                              
                                        </div>	
                                        
                                        <form class="card mt-4" action="{{ route('send_sms_link') }}" method="POST">
                                            @if (Session::get('eror'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('eror') }}
                                            </div>
                                        @endif
                                            @csrf
                                          <div class="card-body">
                                            <div class="form-group">
                                              <label for="email-for-pass">ادخل البريد الخاص بك</label>
                                              <input class="form-control" type="text" id="email-for-pass" name="email" required="" placeholder="ex@ex.com">
                                            </div>
                                          </div>
                                          <div class="card-footer">
                                            <button class="btn btn-success" type="submit">الحصول علي رابط تغيير كلمة المرور</button>
                                            
                                          </div>

                                        </form>

                                        <button class="btn btn-danger" type="submit">العوده الي تسجيل الدخول</button>
                                      </div>
                                    </div>
                                  </div>


                                </body>
                                </html>