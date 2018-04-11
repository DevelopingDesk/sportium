<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hoapparel.com/products.php?live=8_22_116_0 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 11:20:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Sportium</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">
   
    
    
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{asset('sport/engine1/style.css')}}" />
    <script type="text/javascript" src="{{asset('sport/engine1/jquery.js')}}"></script>
</head>

<body>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <!-- For Loading  -->     
  <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

</div>
<aside id="sticky-social">
    <ul>
        <li><a href="https://www.facebook.com/hoapparel.pk" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a href="#" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="#" class="entypo-gplus" target="_blank"><span>Google+</span></a></li>
        <li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
        <li><a href="#" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>

    </ul>
</aside>  
<div class="header">
<div class="top_logo wow lightSpeedIn"data-wow-delay="1.6s">
  <div class="container">
      
            
        </div>
    </div>








</div>


<div class="header">
 <div class="container">
   <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-0">
     <div class="logo wow fadeInDown"  data-wow-delay="0.5s"> <a href=""><img src="images/logo.png" class="img-responsive"></a>
     </div>
     </div>
      
       <div class="col-lg-9 col-md-9 col-sm-9">
       <div class="row">
          
<div class="col-lg-4 col-md-4 col-sm-4">
</div>
<div class="col-lg-5 col-md-6 col-sm-6">
</div>
            
            
            <div class="col-lg-3 col-md-2 col-sm-2">
              <div class="search_con wow fadeInRight" data-wow-delay="1s">
                  <form action="" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="tsearch" placeholder="         Search any product" style=" font-size:11px;">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style=" background-color:none;" type="button"><li class="glyphicon glyphicon-search"></li></button>
                    </span>
                    </div>
                    </form>
            
            </div>
                
                <div class="addbasket  wow fadeInRight" data-wow-delay="1.3s">
<a href="/">                <img src="{{asset('sport/images/basket.png')}}" class="img-responsive zo2 ">
</a>                </div>
                </div>


            </div>
      @include('Partials.navbar')
       
       </div>
   </div>
 </div>
</div>
<div class="products_bg wow lightSpeedIn" data-wow-delay="1s">
 <div class="container">
  <div class="row">

<div class="col-lg-3 col-md-3 col-sm-3 lfthd1 ">

    <div id="masterdiv">
           

            <div class="menutitle" onclick="SwitchMenu('sub1');" style="cursor:pointer">
                    <div class="" style="background: #2b2b2b url(images/lln2.png) left 15px center no-repeat;
            text-transform: uppercase;
            padding: 10px 5px 10px 42px;
            margin: 0;
            font: normal 18px 'Roboto', sans-serif;
            font-weight: 700;
            color: #fff;">
              {{$sidecat}}            </div>
                </div>
                
                @foreach($sidesub as $sub)
                <span class="submenu" id="sub1">
                    
                  <div class="left_sub_menu">
            <span style=" font: normal 14px 'Roboto', sans-serif;
            font-weight: 700;
            color: #fff;
            background: #F90010 url(images/err2.png) 15px center no-repeat;
            display: block;
            padding: 10px 5px 10px 28px;
            transition: all 0.5s;
            border-bottom: solid 1px #CCC;
            text-decoration: none;">{{$sub->name}}</span>
            </div>
                    </span>
        @endforeach
        
       
            </div>
</div>  <div class="col-lg-8 col-md-8 col-sm-8">

     
      
<div class="scrollbar" id="style-1">
   <div class="force-overflow" style="overflow:auto">

      <div class="products">
     
            
                <div class="">
                             @foreach($product as $pr)
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="p_box2">
                                           <a href="{{route('single.product',$pr->id)}}"><img src="{{asset($pr->image)}}" class="img-responsive zo"></a>
<div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
       <div class="pname">{{$pr->name}}</div>
       </div>
       
        <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
              <div class="part">HOA-02-02-02-102</div>
        </div>
               
                            <div class="bbasket"><a href="/"><li class="glyphicon glyphicon-shopping-cart"></li> Add To Basket</a></div>
                        </div>
                    </div>
                            @endforeach           
                                      
                                      
                                    </div>
  </div>
</div>
</div>
                    
      </div>
      
           
      </div>
   <div class=" col-lg-1 col-md-1 col-sm-1"></div>
 
  </div>
 </div>
</div>

@include('Partials.footer')


<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('sport/js/bootstrap.min.js')}}"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="{{asset('sport/js/index.js')}}"></script>
<script src="chk_frm.html"></script>
<link rel="stylesheet" href="{{asset('sport/css/animate.min.css')}}">
<script src="{{asset('sport/js/wow.min.js')}}"></script>
<script> new WOW().init(); </script>
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeOut(500);
});
  </script>
<link rel="stylesheet" href="css/animate.min.css">
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="{{asset('sport/js/main.js')}}"></script>
<link href="{{asset('sport/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('sport/css/style2.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('sport/css/animate.min.css')}}">
</body>

<!-- Mirrored from hoapparel.com/products.php?live=8_22_116_0 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 11:20:17 GMT -->
</html>
