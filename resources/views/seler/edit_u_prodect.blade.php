



 
@extends('layout/navbar')

<style>
  body{
    background-color: #002B5B;  color: white;
  }
  
  body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
     color: black;
  }
  
  a:hover{
    color: black;
    text-decoration: none;
  }
  
  
  
  </style>

@section('create_pro')
<style>
    label{
      font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
  </style>
  <title>تعديل المنتجات</title>
  </head>
  <body>
  
  
  <div class="container">
   
 
  <br><br>
  <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('profile_seler') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>

  <!------ Include the above in your HEAD tag ---------->
  
  <form class="form-horizontal" action="update_pro" method="POST" enctype="multipart/form-data">
   
    @csrf
    <fieldset>
  
  <!-- Form Name -->
  <legend>PRODUCTS</legend>
  @php
    $id_tager=session()->get('logeduserseler');
@endphp

    <input type="hidden" name="id" value="{{ $u_pro->id }}">
   {{-- <input type="hidden" name="id_tager" value="{{ $id_tager  }}"> --}}
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">اسم المنتج</label> 
     
    <div class="col-md-4">
    <input id="product_name" name="name_prod" value="{{ $u_pro->name_prod; }}" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
      
    </div>
  </div>
  
  @php
    if ($u_pro->type_ ==2) {
        $type='طقم كامل';
      }elseif ($u_pro->type_ ==3) {
        $type=' تيشيرت';
      }elseif ($u_pro->type_ ==4) {
        $type=' ستارز';
      }elseif ($u_pro->type_ ==5) {
        $type=' شنطه';
      }elseif ($u_pro->type_ ==6) {
        $type=' شورت';
      }elseif ($u_pro->type_ ==7) {
        $type=' >اكسسورات رياضيه';
        
    }
  @endphp
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">فئه المنتج</label>  
    <div class="col-md-4">
            <select name="type_" id="">
            <option value="{{ $u_pro->type_; }}">{{ $type }} </option>
            <option value="2">طقم كامل</option>
            <option value="3">تيشيرت</option>
            <option value="4">ستارز</option>
            <option value="5">شنطه</option>
            <option value="6">شورت</option>
            <option value="7">اكسسورات رياضيه</option>
  
            
  
            </select>    
    </div>
  </div>
  
  
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">الكميه المتاحه</label>  
    <div class="col-md-4">
    <input id="available_quantity" name="avelb" value="{{ $u_pro->avelb; }}" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
      
    </div>
  </div>

@php
    // session_start();
    // $id_tager=$_SESSION['id_tager'];
 @endphp
  {{-- <div class="form-group">
    <label class="col-md-4 control-label" for="available_quantity">الكميه المتاحه</label>  
    <div class="col-md-4">
    <input id="available_quantity" name="id_tager" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" value="" type="hidden">
      
    </div>
  </div> --}}
  
  
  
  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_description">وصف المنتج </label>
    <div class="col-md-4">                     
      <textarea class="form-control" value="" id="product_description" name="discription">{{ $u_pro->discription; }}</textarea>
    </div>
  </div>
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="percentage_discount"> السعر</label>  
    <div class="col-md-4">
    <input id="percentage" name="prise" value="{{ $u_pro->prise; }}" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
      
    </div>
  </div>
  
  
  <!-- Text input-->
  {{-- <div class="form-group">
    <label class="col-md-4 control-label" for="percentage_discount"> قيمه الخصم  مقدره بالنسبه المئويه</label>  
    <div class="col-md-4">
    <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
      
    </div>
  </div>
   --}}
  
  
   {{ $u_pro->img; }}
  <input type="heddin" name="d_img"  value="{{ $u_pro->img; }}" id="">
   <!-- File Button --> 
  <div class="form-group">
    <img style="width: 100px; hight:100px;" src="{{ $u_pro->img; }}" alt="">
    <label class="col-md-4 control-label"  for="filebutton">صوره المنتج</label>
    <div class="col-md-4">
      <input id="filebutton" name="img" value="{{ $u_pro->img; }}"  class="input-file" type="file">
    </div>
  </div>
  
  
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">نشر الان</label>
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
    </div>
    </div>
  
  </fieldset>
  </form>
  
  
  
  
  
  </div>    


@endsection










