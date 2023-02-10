



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/card.css">

    <style>
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><a style="  color: black; " href="/shop"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
@php
    $total=0;
@endphp
                  
                    <div class="d-flex justify-content-between"><span>You have {{ Session::get('numroes') }} items in your cart</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                            <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>

                    {{-- SELECT `id`, `id_pro`, `id_tager`, `name_prod`, `discription`, `img`, `type_`, `prise`, `avelb`, `id_clint`, `created_at`, `updated_at` FROM `CaedInterim` WHERE 1 --}}
                    @foreach ($select_all as $item)
    

                    
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="{{ $item->img }}" width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block">{{ $item->name_prod }}</span><span class="spec"></span></div>
                        </div>
                        @php
                        if ($item->avelb >0) {
                            $mny= $item->avelb;
                        }else{
                            $mny= 1;
                        }
                        
                            $total+=$item->prise * $mny
                        @endphp
                     <div class="d-flex flex-row align-items-center"><span class="d-block ml-5 font-weight-bold">{{ $item->prise }}</span>  <form action="delet_profrom_card" method="POST"> @csrf <input type="hidden" name="id_pro" value="{{ $item->id_pro }}"> <button type="submit" name="delet" class="btn"  ><i class="ri-delete-bin-line"></i></button> </form></div>
                                             
                    </div>
                    <div style="float: right;
                    
                    padding: 13px;
                     text-align:right;
                            width: 50%;
                            height: 27px;
                           
                           
                            margin: 6px 0px;
                            ">                      
                                
                          
                            
                                                     <a >{{ $item->avelb;  }} </a>-: الكمية </div>  
                            <div style="clear: both;"></div> 
                    @endforeach
<br>
                     <div class="total"> <p style="">  <span > {{  $total  }}</span> المجموع الكلي</p> </div>
                      <style>
                        .total{
                            height: 35px;
    background-color: aliceblue;

                        }
                        button p{
                            color: darkgreen;
                            
                            
                            display: inline-block;
                            padding-top: 8px;
                        }
                        button{
                           margin: 8px;

                        }
                      </style>
                 </div>
            </div>

            <div class="col-md-4"> 
                <script> function lolol() {
                    alert('قريبا'); 
                 } </script>

                            <div>
                                    <button type="" class="btn  btn-block"><p style="">   <span > {{  $total }}</span> المجموع الكلي</p> </button>
                                     <br><br><br><br><br>
                                    {{-- <form action="" method=""> --}}
                                    <button type="submit" onclick="lolol();" name="pay_online" class="btn btn-outline-secondary btn-block">استخدام طرق الدفع الالكترونية</button>
                                    {{-- </form> --}}
                            </div>

                            
                            
                            <div>   
                                  
                                  <form action="check_out_ofline" method="POST">
                               
                                    
                                        @csrf
                                     <input type="hidden" name="meny" value="{{ Session::get('numroes') }}">
                                     <input type="hidden" name="total" value="{{  $total }}">
                                     
                                    <button type="submit"  name="pay_ofline" class="btn btn-outline-secondary btn-block">الدفع عند الاستلام</button>
                                    </form>
                            </div>

            </div>
   









            <!-- <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png"/></span> </label>

<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png"/></span> </label>


<label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png"/></span> </label>
                    <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                    <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                    </div>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>$3000.00</span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>$20.00</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>$3020.00</span></div><button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>$3020.00</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
            </div>
        </div>
    </div> -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="../../js/card.js"></script>
</body>
</html>