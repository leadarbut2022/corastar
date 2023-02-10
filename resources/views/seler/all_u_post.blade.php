


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/index.css">-->
    <link rel="stylesheet" href="../../../css/marcket.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/card.css">

    <!-- plugin css for this page -->
     <link 
    rel="stylesheet"
     href="../../../assets/vendors/mdi/css/materialdesignicons.min.css" 
  />
   <link rel="stylesheet" href="../../../assets/vendors/aos/dist/aos.css/aos.css" /> 

  <!-- End plugin css for this page -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />

  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/style.css">
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
  <!-- endinject -->
    <title>منشوراتك</title>
</head>
<body>

  
    
    <div class="container-scroller">
        <div class="main-panel">


      

       <br><br><br><br>
        

        
        <div class="container">
                     
<div class="d-flex flex-row align-items-center"><a style="  color: black; " href="{{ route('profile_seler') }}"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></a></div>
<br><br>

                

                 

         
        <div class="row">

          @foreach ($all_post as $item)
              

             
          <img src="" alt="">
            
              <div class="col-12 col-md-3">
                    <div class="prodect">
                  
                          <form action="" method="POST" enctype="multipart/form-data">
                                  


                                  <div class="img">
                                      <img src="{{ $item->img }}" alt="">
                                  </div> 

                                  <div class="pro-text">
                      
                                          <p class="text-primary">{{ $item->name_prod }}</p>                         
                                          {{-- <p>{{ $item->discription }} </p> --}}
                                          <p class="text-info" style="">${{ $item->prise }}</p>
                                          <p>{{ $item->avelb }}</p>
                                          <p>{{ $item->created_at }}</p>
 <form></form>

                                      <form action="delet_u_prodect" method="POST">
                                        
                                                @method('POST') 
                                                @csrf
                                                <input type="hidden" name="id_pro" value="{{ $item->id }}" >    
                           
                                                <input type="submit"  style="  position: relative;width: 100%;"  name="delet" value="حذف المنتج" class="btn btn-success" >
                                     </form>   

                                     <br><br>
                                    
                                    
                                      <form action="edit_u_prodect" method="POST">@csrf @method('POST') <input type="hidden" name="id_pro" value="{{ $item->id }}" >    <input type="submit"  style="  position: relative;width: 100%;"  name="edit" value="تعديل المنتج" class="btn btn-success" > </form>   
                                  
                                    </div>
                          </form>

                        </div>
                    </div>

                                     
         @endforeach
                                  
                 

                
        




        </div></div></div></div>



            <script src="../../js/card.js"></script>


    






</body>
</html>
