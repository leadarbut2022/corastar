


     @extends('layout.navbar')


 
     
       @section('gols')


     
<div class="container">

    <div class="" style="width: 100%; margin:auto; padding:50px; " >
<div class="row" >
 
<div class="col-12 col-md-9">

     <div class="row">
        <div class="col-12">

      
{{-- @foreach ($news as $item) --}}
    

          <div class="body_news">
          
                <div class="p_news">
                <h1 style="color: white;">{{ $news->addres_post }} </h1>
                <br>
                <p>{{ $news->name_poster }}</p>

                <div class=" img_news" style="overflow: hidden;">
                  @if ( $news->img > 0)
                      <img style="width: 100%;" src="{{ $news->img }}" alt="">
                  @endif

                  @if ($news->vedo > 0)
                  <video width="550" height="550" controls>
                    <source src="{{ $news->vedo }}" type="video/mp4">
                    <source src="{{ $news->vedo }}" type="video/ogg">
                  Your browser does not support the video tag.
                  </video>
                    
                  @endif
                 
              </div>
              <br><br>

                <span>{{ $news->created_at }}/{{ $news->day }}</span>
                <br><br>
                    <p>{{ $news->discription }}</p>
                    
                    
            </div>
               
            </div>
       
            <br><br>
<br><br>
<br><br>
<br><br>
        </div>
<br><br>
<br><br>
<br><br>
<br><br>

        {{-- @endforeach     --}}
                <div class="col-12">

                          
                </div>

     </div>
</div>


<style>


a{
  color: white;
  text-decoration: none;

}

a:hover{
  color: #FBDF07;
  text-decoration: none;
}

.makal{
    height: 140px;
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
height: 100%;
  
  }
  .makal .img{
    width: 50%;
  position: relative;
  float: right;
  height:100%;
  
  }
  
  
  .col-5{
    border: 2px solid ;
  }
  
  .row{
    margin: 0px;
    padding: 0%;
  }
  </style>
  <div class="col-12 col-md-3">
  
{{-- <div class=" row"  >
            
            
                    @foreach ($all as $v_2)
                  <div class="col-12">
                            <div class="makal col-12">

                            <div class="prg">
                                @php
                                $id=$v_2->id;
                            @endphp
                                    <a href="{{ route('views_post','id='.$id) }}">{{ $v_2->addres_post }}</a><br>
                                 --}}
                                    {{-- <small class="date_po">{{ $v_2->created_at }}</small>
                                    <br>
                                    <small >/{{ $v_2->day }}</small>   
                                    <br>
                                    <small class="name_po">{{ $v_2->name_poster }}</small>                        --}}
                             {{-- </div>

                            <div class="img">
                                    @if ($v_2->img >1)
                                    <img  class="img" src="  {{ $v_2->img }}" alt="">
                                    @endif --}}
                                    {{-- @if ($v_2->vedo >1)
                                        <video src="{{ $v_2->vedo }}"></video>
                                    @endif --}}
                            {{-- </div>


                            </div>
                  </div>
                @endforeach 
                      
</div>

</div> --}}



 <br>
 <br>
 <br>
</div>
    </div>

 
    <style>
      a{
        color: white;
        text-decoration: none;
      
      }
      
      a:hover{
        color: #FBDF07;
        text-decoration: none;
      }
      .faster{
        height: 240px;
        width: 47%;
        border: 0px solid white;
        overflow: hidden;
        margin: 0px
        
      }
      
      .faster .img_ved{
        height: 128px;
        overflow: hidden;
       
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

      </style>


    <div class="row" >
                            

      @foreach ($all as $v_1)
    
      <div class="faster col-lg-3">
               
   
            <div class="img_ved">
                  @if ($v_1->img >1)
                  <img  class="img" src="  {{ $v_1->img }}" alt="">
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


@endsection



