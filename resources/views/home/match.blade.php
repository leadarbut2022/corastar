@extends('layout/navbar')
@section('match')
    

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">
<style>
  body{
    background-color: #002B5B;  color: white;
  }
  
  body span,h1,h2,h3,h4,h5,h6,p,small,strong,a {
     color: white;
  }
  
  a:hover{
    color: yellow;
    text-decoration: none;
  }
  
  
  
  </style>
<section class="match">



{{-- 
                 <!-- partial:partials/_navbar.html -->
                 <header id="header">
                    <div class="container">
                      <nav class="navbar navbar-expand-lg navbar-light">
                       
                        <div class="navbar-bottom">
                          <div class="d-flex justify-content-between align-items-center" style="height: 71px;">
                            <div>
                              <a class="navbar-brand" href="#"
                                ><img src="/img//icons8-soccer-ball-96.png" alt="cora star"
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
           --}}
        
        
        
        
                  <script type="text/javascript">
                    atOptions = {
                      'key' : 'f32103e36b0e782b283e7332389a8188',
                      'format' : 'iframe',
                      'height' : 250,
                      'width' : 300,
                      'params' : {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
                  </script>
        
        
        
        
             
        <div class="container">
            
        
                  <div class="flash-news-banner">
                    <div class="container">
                      <div class="d-lg-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                          <span class="badge badge-dark mr-3">احدث الاخبار</span>
        
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                               <div class="carousel-inner">

                                <div class="carousel-item  active">
                                  <p style="z-index: 5; color:white;">الاحداث لحظه بلحظه </p>
                                 </div>
                              @foreach ($heders as $item)
                                  @php
                                     $id=$item->id;   
                                  @endphp
                            
                               <div class="carousel-item ">
                                <a href="{{ route('views_post','id='.$id) }}" style="z-index: 5; color:white;"> {{ $item->addres_post }}</p>
                               </div>

                               @endforeach 
        
                               <script type="text/javascript">
                                atOptions = {
                                  'key' : 'f32103e36b0e782b283e7332389a8188',
                                  'format' : 'iframe',
                                  'height' : 250,
                                  'width' : 300,
                                  'params' : {}
                                };
                                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
                              </script>
                          


        <div class="carousel-item ">
                          <p class="mb-0">
                          
                         
                          </p>
        
                          </div>
     
        
                          </div>
                        
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
          </a>                
                        </div>
                        </div>
                        <div class="d-flex">
                          <span class="mr-3 text-danger"></span>
                            <a href="/news"> المزيد</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- partial -->
        
                  <script type="text/javascript">
                    atOptions = {
                      'key' : '2b011071d00f0d96f3d660a8856369f7',
                      'format' : 'iframe',
                      'height' : 90,
                      'width' : 728,
                      'params' : {}
                    };
                    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/2b011071d00f0d96f3d660a8856369f7/invoke.js"></scr' + 'ipt>');
                  </script>
        
  
 
<iframe src="https://www.scorebat.com/embed/livescore/" frameborder="0" width="600" height="760" allowfullscreen allow='autoplay; fullscreen' style="width:100%;height:760px;overflow:hidden;display:block;" class="_scorebatEmbeddedPlayer_"></iframe><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return; 
  
  js = d.createElement(s); js.id = id;
  js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'scorebat-jssdk'));</script>
        </section>
        
                  </div></div></div>
             
                </div>
        
                <br><br>
                <footer class="site-footer">
                  <div class="container">
                    <script type="text/javascript">
                      atOptions = {
                        'key' : '2b011071d00f0d96f3d660a8856369f7',
                        'format' : 'iframe',
                        'height' : 90,
                        'width' : 728,
                        'params' : {}
                      };
                      document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/2b011071d00f0d96f3d660a8856369f7/invoke.js"></scr' + 'ipt>');
                    </script>
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
        
                <script type="text/javascript">
                  atOptions = {
                    'key' : 'f32103e36b0e782b283e7332389a8188',
                    'format' : 'iframe',
                    'height' : 250,
                    'width' : 300,
                    'params' : {}
                  };
                  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f32103e36b0e782b283e7332389a8188/invoke.js"></scr' + 'ipt>');
                </script>
                  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
         --}}

</section>

@endsection