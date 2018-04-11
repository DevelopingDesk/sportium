<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hoapparel.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 11:02:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--Frontend Developer Details-->
    <meta name="description" content="sportium">
    

<title>The Sportium</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('sport/animate.min.html')}}">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">
 <!-- Owl Carousel Assets -->
    

    <link rel="stylesheet" href="{{asset('sport/css/main2.css')}}">
    
    
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{asset('sport/engine1/style.css')}}" />
    <script type="text/javascript" src="{{asset('sport/engine1/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>

<body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
     <div class="logo wow fadeInDown"  data-wow-delay="0.5s"> <a href="index-2.html"><img src="images/logo.png" class="img-responsive"></a>
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
                    <form action="#" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="tsearch" placeholder="         Search any product" style=" font-size:11px;">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style=" background-color:none;" type="button"><li class="glyphicon glyphicon-search"></li></button>
                    </span>
                    </div>
                    </form>
            
            </div>
                
                <div class="addbasket  wow fadeInRight" data-wow-delay="1.3s">
<a href="{{route('cart.index')}}">                <img src="{{asset('sport/images/basket.png')}}" class="img-responsive zo2 ">
</a>                </div>
                </div>
            </div>
      @include('Partials.navbar')
       
       </div>
   </div>
 </div>
</div>
@include('Partials.slider')

<div class="cat_bg">
<div class="container">
 <div class="row">
 <div class="col-lg-1 col-md-1 col-sm-1"></div>
 <div class="col-lg-10 col-md-10 col-sm-10">
 
  <div style="text-align:center; padding-top:20px;"> <h2>Welcome The Sportium</h2> </div>
    <div class="welcometxt">
                
 
  <p style=" color:#fff;"><div style="text-align:center;">
<p><strong><span style="color: rgb(51, 51, 51);"><span style="font-size: xx-large;">Work with PASSION</span></span></strong></p>
<p><strong><span style="color: rgb(51, 51, 51);"><span style="font-size: xx-large;">NEVER COMPROMISE on Best</span></span></strong></p>
<p><strong><span style="color: rgb(51, 51, 51);"><span style="font-size: xx-large;">Do not ignore Little Things</span></span></strong></p>
<p><strong><span style="color: rgb(51, 51, 51);"><span style="font-size: xx-large;">Focus on COMMITMENT</span></span></strong></p>
</div></p>
 
 </div>
  </div>
    <div class="col-lg-1 col-md-1 col-sm-1"></div>

 </div>
 <div class="cats" style="padding:10px 0;" >
  <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 cat_img wow bounceInDown">
               <ul id="flexiselDemo3" class="imi">
                    @foreach($cat as $ct)                  

                                        <li style=" padding:30px 0; "><a href="{{route('view.subcat',$ct->id)}}"><img src="{{asset($ct->image)}}" class="img-responsive zo"></a><br>
<div class="cat_box">
<span class="cat_name" style=" color:#fff !important; font-weight:bold;"> {{$ct->name}}</span><br>
<span class="cat_detail" style="color:#fff !important;">We Manufacture all sportswear like Soccer Wears, Basketball Wears, Swimwear, Rugby Wears and Tennis Wear</span><br><br>

<span class="morebtn"><a href=""><img src='sport/images/more.png' class="img-responsive zo2"></a></span>
</div>
</li>
@endforeach
                                  
                        

                         

                          

                                    </ul>
           
            </div>
        </div>
</div>
<div style="text-align:center; padding-bottom:20px;">
 <img src="{{asset('sport/images/catss.png')}}" class="img-responsive">
</div>
 
</div>
</div>





 
<div class="featured">

<div style="">
<div class="container">
    <div class="row">
    
    <div style=" padding:45px 0; text-align:center;">
    
    <img src="{{asset('sport/images/fee.png')}}" class="img-responsive" style="text-align:center;"> 
    </div>
    @if($fetured !=null)
@foreach($fetured as $fs)

                                        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInDown">
        <div class="p_box">
        <a href=""><img src="" class="img-responsive zo"></a>
       <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
       <div class="pname"></div>
       </div>
       
        <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
              <div class="part">HOA-03-01-02-101</div>
        </div>
                            <div class="bbasket"><a href=""><li class="glyphicon glyphicon-shopping-cart"></li> Add To Inquiry Basket</a>
                            </div>
        </div>
        </div>
     
          @endforeach                    
                @endif              
        
        
                                  
     </div>
 </div>
</div>
</div>
  <section id="section-contact" class="section appear clearfix">
            <div class="container">
                <center class="content-heading2 wow fadeInDown delay-02s"><h2>Contact us</h2>
                    <span>Get In Touch</span>
                    <p class="contact-info"><br>
</p>
                </center>

                
                
                 <div class="row">
                                                            <form action="http://hoapparel.com/submit_feedform.php">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2">
                    
                         <input type="text" class="form-control contact-for-fld" name="pname" id="pname" placeholder="Name..." required>
                         <input type="text" class="form-control contact-for-fld" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required/>
                         <input type="text" class="form-control contact-for-fld" name="subject" id="subject" placeholder="Subject" required>
                    
                    </div>
                    
                    <div class="col-lg-4">
                        <textarea class="form-control contact-for-fld" name="message" rows="4" data-rule="required" data-msg="Please write something for us" required></textarea>
                        <button type="submit" class="btn btn-danger" style="width:100%; background:#bd3749 !important;">SEND</button>
                    </div>
                    </form>
                                        <div class="col-lg-4">
<div class="contact-info2"><img src="images/add-icon.png" width="50" height="50" alt="" />                         Sialkot 51340, Pakistan</div>
<div class="contact-info2"><img src="images/mail-icon.png" width="50" height="50" alt="" />                         <a href="">info@thesportium.com</a></div>
<div class="contact-info2"><img src="images/phone-icon.png" width="50" height="50" alt="" />                         +92 300 8611462</div>
</div>                    
                 </div>
                 
                
            </div>
        </section>
@include('Partials.footer')
 



<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('sport/js/bootstrap.min.js')}}"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="{{asset('sport/js/index.js')}}"></script>
<script src="{{asset('sport/chk_frm.html')}}"></script>
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
    <script>
    $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, false).delay(200).fadeOut(500);
});
    </script>
<link rel="stylesheet" href="{{asset('sport/css/animate.min.css')}}">
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="{{asset('sport/js/main.js')}}"></script>
<link href="{{asset('sport/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('sport/css/style2.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('sport/css/animate.min.css')}}">

<script type="text/javascript">
$(window).load(function() {
$("#flexiselDemo3").flexisel({
visibleItems: 3,
animationSpeed: 1000,
autoPlay: true,
autoPlaySpeed: 4000, 
pauseOnHover: true,
enableResponsiveBreakpoints: true,
responsiveBreakpoints: { 
portrait: { 
changePoint:1200,
visibleItems: 2
}, 
portrait: { 
changePoint:995,
visibleItems: 1
}, 
landscape: { 
changePoint:995,
visibleItems: 1
},
tablet: { 
changePoint:995,
visibleItems: 1
}
}
});

$("#flexiselDemo4").flexisel2({
visibleItems: 4,
animationSpeed: 1000,
autoPlay: true,
autoPlaySpeed: 4000, 
pauseOnHover: true,
enableResponsiveBreakpoints: true,
responsiveBreakpoints: { 
portrait: { 
changePoint:1200,
visibleItems: 2
}, 
portrait: { 
changePoint:995,
visibleItems: 1
}, 
landscape: { 
changePoint:995,
visibleItems: 1
},
tablet: { 
changePoint:995,
visibleItems: 1
}
}
});

});
</script>
<script type="text/javascript" src="{{asset('sport/js/jquery.flexisel.js')}}"></script>
<script type="text/javascript" src="{{asset('sport/js/jquery.flexisel2.js')}}"></script>

    <!-- End WOWSlider.com BODY section -->
    <script type="text/javascript" src="{{asset('sport/engine1/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('sport/engine1/script.js')}}"></script>
    <!-- End WOWSlider.com BODY section -->

</body>

<!-- Mirrored from hoapparel.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 11:05:33 GMT -->
</html>
