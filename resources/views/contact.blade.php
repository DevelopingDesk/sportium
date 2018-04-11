
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Sportium</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">

<style>input::-webkit-input-placeholder { /* WebKit browsers */
    color:    #000 !important;
}
textarea::-webkit-input-placeholder { /* WebKit browsers */
    color:    #000 !important;
}
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #000 !important;
}
input::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #000 !important;
}
input:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #000 !important;
}
textarea::-webkit-input-placeholder {  color: #000;}</style>

</head>

<body>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
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
     <div class="logo wow fadeInDown"  data-wow-delay="0.5s"> <a href="/"><img src="{{asset('sport/images/logo.png')}}" class="img-responsive"></a>
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
                	<form action="search.php" method="post">
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
</div><div class=" wow fadeInDown" data-wow-delay="2s" style="text-align:center">
 <img src="{{asset('sport/images/content.png')}}" class="img-responsive">
</div>
<div class="products_bg wow zoomIn" data-wow-delay="1s">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>
         
         <div class="s_a">
       <ul>
        <li>
         <h2 style="font-size:30px !important; text-align:center !important; color:#000;"> CONTACT US <span style=""><img src="{{asset('sport/images/arro.png')}}"></span> <span class="s_aa" style=" color:#da2435;"> GET IN TOUCH</span></h2>
        </li>
       </ul>
       
      </div>
         
         
        
         
           <div class="row">

<div class="col-lg-4 col-md-4 col-sm-4">
                                   <div class="btm_head" style=" border-bottom: none !important; padding:0px !important;     font-size: 17px;
    color: #000;
    font-weight: 600;"><span >CONTACT ADDRESS</span></div>


          <div class="contact_detail">

 <p><u><span style="color: rgb(0, 0, 0);"><strong><font size="2">The Sportium<br />
</font></strong></span></u><span style="color: rgb(0, 0, 0);"><br />
</span><strong><font size="2">Kotli Behram, 1st Floor Zong Franchise,<br />
</font></strong><strong><font size="2">Kashmir Road, Sialkot.</font></strong><strong><font size="2"><br />
P A</font>&nbsp;K I S T A N.</strong></p>
<div class="pp"><span style="color: rgb(0, 0, 0);">Tel: &nbsp; &nbsp;+92-52-4262522<br />
Cell# +92-300-8611462<br />
<br />
</span>
<div style=" "><span style="color: rgb(0, 0, 0);">Email: info@hoapparel.com</span></div>
<div style=" padding:10px 0"><span style="color: rgb(0, 0, 0);">www.hoapparel.com</span></div>
</div>

</div>
<div>


</div>

                 </div>
 <div class="col-lg-8 col-md-8 col-sm-8">
 <div class="btm_head" style=" border-bottom: none !important; padding:0px !important;      font-size: 17px;
    color: #000;
    font-weight: 600;"><span >HEAD OFFICE</span></div>
 
 <div class="maphere">
 <div class="embed-responsive embed-responsive-16by9">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.600517023057!2d74.51543271568373!3d32.51010480485299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea36a8dabd5b%3A0xd5e8b39bd2c4fb85!2sZong+Franchise!5e0!3m2!1sen!2s!4v1481883136638" width="305" height="253" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
 </div>
 </div>
                
                 


                </div>
         </div>
</div></div></div></div>

@include('Partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="js/index.js"></script>
<script src="chk_frm.js"></script>
<link rel="stylesheet" href="css/animate.min.css">
<script src="js/wow.min.js"></script>
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
<script src="js/main.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css">

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
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/jquery.flexisel2.js"></script>

</body>
</html>	