
@extends('layout/navbar')

@section('create_pro')
<style>
    label{
      font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
  </style>
  </head>
  <body>
  
  
  <div class="container">
   
 
  <br><br>
  <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('profile') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>

  <!------ Include the above in your HEAD tag ---------->
 
<br>
<br>
<br>


   






  <form action="edit_profile" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $info->id }}">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
    <input type="text" name="name" id="first_name"  value="{{ $info->name; }}" class="form-control input-sm" placeholder=" اسم العميل">
    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
        </div>
    
    </div>

    <div class="form-group">
        <input type="text"  name="email" value="{{ $info->email; }}" id="email"  class="form-control input-sm" placeholder="البريد الا لكتروني">
        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
          
    </div>

    <div class="form-group">
        <input type="text" name="phone" value="{{ $info->phone; }}" id="phone" class="form-control input-sm" placeholder="رقم الهاتف مكون من 11 رقم">
        <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
        
    </div>

    <div class="form-group">
                    <input type="text" name="mohfza" value="{{ $info->mohfza; }}" id="phone" class="form-control input-sm" placeholder=" اسم المحافظة">
                  <label> <span class="text-danger">@error('mohfza'){{ $message }} @enderror</span> </label> 
                </div>
                <div class="form-group">
                    <input type="text" name="city_" value="{{ $info->city_; }}" id="phone" class="form-control input-sm" placeholder=" اسم المدينة">
                  <label> <span class="text-danger">@error('city_'){{ $message }} @enderror</span> </label> 
                </div>
                <div class="form-group">
                    <input type="text" name="ather_infoirm"  value="{{ $info->ather_infoirm; }}" id="phone" class="form-control input-sm" placeholder=" تفاصيل العنوان ">
                  <label>  <span class="text-danger">@error('ather_infoirm'){{ $message }} @enderror</span></label> 
                </div>


     


    
                
        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="تأكيد الرقم السري">
            </div>
        </div> --}}
        
    </div>
    
    <input type="submit" name="sub_clint"  value="تعديل البيانات" class="btn btn-info btn-block">

</form>
  
  
  
  
  
  </div>    


@endsection

