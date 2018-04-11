
<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--Frontend Developer Details-->
    <meta name="description" content="Abd ul Rehman">
  

<title>The Sportium</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('sport/animate.min.html')}}">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">
 <!-- Owl Carousel Assets -->
    

	<link rel="stylesheet" href="{{asset('sport/css/main2.css')}}">
    

</head>

<body>
    
	
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
                	<form action="http://hoapparel.com/search.php" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="tsearch" placeholder="         Search any product" style=" font-size:11px;">
                    <span class="input-group-btn">
                    <button class="btn btn-default" style=" background-color:none;" type="button"><li class="glyphicon glyphicon-search"></li></button>
                    </span>
                    </div>
                    </form>
            
            </div>
                
                <div class="addbasket  wow fadeInRight" data-wow-delay="1.3s">
<a href="basket.html">                <img src="images/basket.png" class="img-responsive zo2 ">
</a>                </div>
                </div>
            </div>
     @include('Partials.navbar')
       
       </div>
   </div>
 </div>
</div>		   
		   <div class="container">
		    <div class="sectioncenter">
		

<div class="row">
			 
			 
			  <div class="col-md-12">
          
			  <h1></h1>
			  
			  <div class="centerprod">
			  
			  @foreach($subcat as $sub)
			  	
			   		
			   			   <ul>
			    
			  <li style=" margin-bottom:20px !important;text-decoration:none !important;"><a href="{{route('subcategory.product',$sub->id)}}">

<img style=" padding-bottom:20px !important; width:228px; height:162px;" src="{{asset($sub->image)}}"  class="img-responsive zo"><br>
 <span ">{{$sub->name}}</span></a> <br>

</a></li>
			  
			   </ul>
               @endforeach
			   			    <div class="clearfix"></div>
			  </div>
			  
			  
			  
			  
			  
			  </div>
			 
			 
			  </div><!-- row -->
		       </div><!-- sectioncenter -->
		        </div><!-- container -->
		   
		   
		   
		   
		   
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
 		   
		
	
	
	
	
	
	
	

<div class="btm_bg wow fadeInLeft">
	<div class="container">

        <div class="row">
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
         <div class="col-lg-10 col-md-10 col-sm-10">
         
         <div class="btm_logo">
          <img src="images/cer.png" class="img-responsive" />
         </div>
         
         <div class="btm_cats">
          <a href="scats2ae0.html?mid=7&amp;sec=9"><img src="images/spo.png" class="img-responsive zo2" /></a>
           <a href="scats685b.html?mid=8&amp;sec=20"><img src="images/clo.png" class="img-responsive zo2" /></a>
           <a href="scats4467.html?mid=9&amp;sec=30"><img src="images/act.png" class="img-responsive zo2" /></a>
           <a href="scatsd428.html?mid=12&amp;sec=33"><img src="images/work.png" class="img-responsive zo2" /></a>
           <a href="scatsdd39.html?mid=13&amp;sec=37"><img src="images/bags.png" class="img-responsive zo2" /></a>
         
         </div>
         
         <div class="btm_menu">
                	<ul>
					
                    	<li class="wow zoomIn" data-wow-delay="1.4s"><a href="index-2.html">HOME</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.9s"><a href="about.html">ABOUT HOME OF APPAREL</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.7s"><a href="products78ad.html?live=7_9_1_0">PRODUCTS</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.5s"><a href="gallery_1.html">GALLERY</a></li>
                        <li class="wow zoomIn" data-wow-delay="0.4s"><a href="contact.html">CONTACT</a></li>
                       
                    </ul>
                </div>
         
         </div>
         <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</div>

 



<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="js/index.js"></script>
<script src="chk_frm.html"></script>
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

  </body>

<!-- Mirrored from hoapparel.com/scats.php?mid=8&sec=20 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 11:10:49 GMT -->
</html>