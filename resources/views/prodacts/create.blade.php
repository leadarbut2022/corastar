
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
    <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('profile_seler') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2"> الملف الشخصي</span></a></div>
  <br><br><br>
  <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="shop"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
  <br><br>
  <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('signoutSeler') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2"> log out</span></a></div>

  <br><br>
  <!------ Include the above in your HEAD tag ---------->
  
  <form class="form-horizontal" action="{{route('prodects.store')}}" method="POST" enctype="multipart/form-data">
   
    @csrf
    <fieldset>
  
  <!-- Form Name -->
  <legend>PRODUCTS</legend>
  @php
    $id_tager=session()->get('logeduserseler');
@endphp
   <input type="hidden" name="id_tager" value="{{ $id_tager  }}">
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">اسم المنتج</label> 
     
    <div class="col-md-4">
    <input id="product_name" name="name_prod" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
      
    </div>
  </div>
  
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="product_name">فئه المنتج</label>  
    <div class="col-md-4">
            <select name="type_" id="">
            <option value="0">اختار الفئه</option>
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
    <input id="available_quantity" name="avelb" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
      
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
      <textarea class="form-control" id="product_description" name="discription"></textarea>
    </div>
  </div>
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="percentage_discount"> السعر</label>  
    <div class="col-md-4">
    <input id="percentage" name="prise" placeholder="" class="form-control input-md" required="" type="text">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="percentage_discount"> الخصم بالجنيه</label>  
    <div class="col-md-4">
    <input id="percentage" name="discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
      
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
  
  
  
  
   <!-- File Button --> 
  <div class="form-group">
    <label class="col-md-4 control-label" for="filebutton">صوره المنتج</label>
    <div class="col-md-4">
      <input id="filebutton" name="img" class="input-file" type="file">
    </div>
  </div>
  
  
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-light">نشر الان</button>
    </div>
    </div>
  
  </fieldset>
  </form>
  
  
  
  
  
  </div>    


@endsection