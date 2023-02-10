


  @extends('layout.navbar')

  @section('gols')

       <!-- partial:partials/_navbar.html -->
                
          <div class="container">
  
<style>
a{
  color: white;
  text-decoration: none;

}

a:hover{
  color: #00ADB5;
  text-decoration: none;
}
.faster{
  height: 240px;
  width: 47%;
  border: 0px solid white;
  overflow: hidden;
  margin: 0px
  
}
.faster .img_ved img{
  
  transition: scale 300ms;


}
.faster:hover .img_ved img{
 scale:1.5; 
 
}

.faster .img_ved{
  height: 128px;
  overflow: hidden;
  border-radius: 15px;
 
}


.faster .img_ved img,video{
  width: 100%;
}

.faster .pra{
  text-align: right;
 
}

.faster .pra a{
  display: block;
  padding-left: 5px;
  text-decoration: none;
  margin: 5px 0px;
  
}
.faster .pra .date_po{
  padding-left: 0px;
  font-size: 80%;
font-weight: 400;
display: block;
}
.faster .pra .name_po{
  float: right;
padding-right: 3px;
}


.makal{

 max-height:120px;

overflow: hidden;
margin: 7px;
border: 2px solid;
padding: 0px;
display:flex;
justify-content: space-around;
text-align: right;
}

.makal .prg{
  width: 40%;

position: relative;
float: left;
/* top: 52%; */
padding-left: 7px;

}

.makal .prg a{
  display: block;
  margin-top: 18%;
}

.makal .img img{
  width: 100%;
position: relative;
float: right;
height:100%;

}
.makal .img{
  width: 50%;
position: relative;
float: right;
height: 100%;

}


.col-5{
  border: 2px solid ;
}

.row{
  margin: 0px;
  padding: 0%;
}
</style>
 


 <br><br><br><br><br>

        <div class="row">
          <div class="col-12 col-md-8">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators" style="    margin-left: -9%;">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner" style="width: 85%;  height: 400px;">
                <div class="carousel-item active">
                  <img src="img/corsal.jpeg" class="d-block w-100" alt="...">
                </div>

                @foreach ($flash as $v_3)

                <div class="carousel-item">

                  <img style="width: 85%; height: 400px;" src="{{ $v_3->img }}" class="d-block w-100" alt="...">

                </div>

                @endforeach

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

              <br>
              <br>
              <br>
            </div>




          </div>

          <div class="col-12 col-md-4">
{{-- 
            @foreach ($flash_2 as $f_2 )
                  <div>
                        @php
                             $id=$f_2->id;
                        @endphp
                          <a href="{{ route('views_post','id='.$id) }}"> <div style="  border: 1px solid #00ADB5;
                            width: 142%;
                            margin: 0px 0px;
                            color: #EEEEEE;
                            height: 34px;

    background-color: #393E46;
                            overflow: hidden;
                            white-space: nowrap;">{{ $f_2->addres_post }}</div></a>
                   </div>      
             @endforeach --}}
                
          </div>


        </div>
 
        <div class="row">



  <div class="col-lg-12 px-0">


    <div class="row">
    @foreach ($makal as $v_1)
    <div class="faster col-lg-3">
             
 
          <div class="img_ved">
                @if ($v_1->img >1)
                <img  class="img" src="{{ $v_1->img }}" alt="؛اخفخ">
                @endif
                @if ($v_1->vedo >1)
                    <video src="{{ $v_1->vedo }}"></video>
                @endif
          </div>

          <div class="pra">
                @php
                    $id=$v_1->id;
                @endphp
            <a href="{{ route('views_post','id='.$id) }}">{{ $v_1->addres_post }}</a>
            <small class="date_po">{{ $v_1->created_at }}</small><small>/{{ $v_1->day }}</small>
            <br>
            {{-- <small class="name_po">{{ $v_1->name_poster }}</small> --}}
            
          </div>

     
  </div>    
      @endforeach       



    </div>   
  </div>  
      
                     
            
 
                
                                    
              {{-- 'id_Poster',
        'name_poster',
        'addres_post',
        'discription',
        'img',
        'vedo',
        'day',
        'type_', --}}




           {{-- <div class="col-md-12 col-12" style="padding: 0px; margin:0%;">
            
            @foreach ($news as $v_2)
                  <div class="makal col-3">

                    <div class="prg">
                      @php
                      $id=$v_2->id;
                      $type=$v_2->type_;
                  @endphp
                          <a href="{{ route('views_post','id='.$id,'type='.$type) }}">{{ $v_2->addres_post }}</a><br>
                       
          {{-- <small class="date_po">{{ $v_2->created_at }}</small>
          <br> --}}
          {{-- <small >/{{ $v_2->day }}</small>    --}}
          {{-- <br>
          <small class="name_po">{{ $v_2->name_poster }}</small>                        --}}
                        {{-- </div>

                    <div class="img">
                          @if ($v_2->img > 0)
                          <img  class="img" src="  {{ $v_2->img }}" alt="">
                          @endif --}}
                          {{-- @if ($v_2->vedo >0)
                              <video src="{{ $v_2->vedo }}"></video>
                          @endif --}}
                    {{-- </div>


                  </div>
      
            @endforeach 
           </div> --}} 
          
       
         

                       
                     
                    
          



    </div>

    {{-- <script type="text/javascript">
      atOptions = {
        'key' : 'f32103e36b0e782b283e7332389a8188',
        'format' : 'iframe',
        'height' : 250,
        'width' : 300,
        'params' : {}
      };
      document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
    </script> --}}
           
          


                {{-- <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold" style="font-family: Arial, Helvetica, sans-serif"> ابقي علي تواصل</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                          
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                         
                        </div>
                    </div>  --}}
                    <!-- Social Follow End -->
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
         <a href="#">binary</a>.
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

   

@endsection