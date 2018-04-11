

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>HOME OF APPAREL</title>

<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">

<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">

<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('sport/css/cloudzoom.css')}}" />

<style type="text/css">

div[style]{

display: block !important;

}

div.cloudzoom-zoom,div.cloudzoom-zoom-inside{

display: block !important;

}

div.cloudzoom-blank,div.cloudzoom-blank div.cloudzoom-lens{

display: none !important;

}

</style>

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
     <div class="logo wow fadeInDown"  data-wow-delay="0.5s"> <a href="/"><img src="images/logo.png" class="img-responsive"></a>
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
<a href="{{route('cart.index')}}">                <img src="{{asset('sport/images/basket.png')}}" class="img-responsive zo2 ">
</a>                </div>
                </div>
            </div>
      @include('Partials.navbar')
       
       </div>
   </div>
 </div>
</div>


<div class="lrgebg wow lightSpeedIn">

 <div class="container">

  <div class="row">

   <div class=" col-lg-1 col-md-1 col-sm-1"></div>

  <div class="col-lg-10 col-md-10 col-sm-10">

      
      

<div class="col-lg-8 col-md-8 col-sm-8">





<div class="pro_box">

<img class = "cloudzoom img-responsive" src = "{{asset($product->image)}}" data-cloudzoom = "zoomImage: '{{asset($product->image)}}', zoomPosition: 'inside', autoInside: true" >



</div>

<div class="more">

    <ul id="flexiselDemo4" class="imi">

  					`

                  

                </ul> 

                </div> 

</div>  

        <div class="col-lg-4 col-md-4 col-sm-4">

        <form action="{{route('Cart.edit',$product->id)}}" method="get" name="frm_cart" id="frm_cart">

            

           <div class="d_name" style=" color:#000;">{{$product->name}}</div>

           <div class="d_head" style=" color:#000;">Product Quick Overview</div>

           <div class="d_art" style=" color:#000;">Art No :{{$product->code}}</div>

             

            <div class="d_detail" style=" color:#000;">

			<h2 style=" color:#000;">{{$product->description}}</h2>

			
            </div>

            <div class="d_art2" style=" color:#000;"><font color="#000">Sizes</font> {{$product->size}}</div>

            

           

           

                                    	<div class="d_detail3"><input type="image" class="zo2" src="{{asset('sport/images/add_basket.png')}}"></div>

       		

<div class="d_detail3"><a href="/" class="btn btn-danger btn-xs" onclick="goBack()">BACK TO PRODUCTS</a></div>

                                        <input type="hidden" name="sub_mit" value="Yes">

                                    <input type="hidden" name="live" value="7_9_4_42">

                                    </form>

           

             </div>

          </div>

          

             



          

          </div>

         

      

           



  

 </div>

 

 </div>



@include('Partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('sport/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        <script src="{{asset('sport/js/index.js')}}"></script>
<script src="{{asset('sport/chk_frm.js')}}"></script>
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
function goBack() {
    window.history.back();
}
</script>

<script src="chk_frm.js"></script><script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>

<script type="text/javascript" src="{{asset('sport/js/cloudzoom.js')}}"></script>

<script>

	CloudZoom.quickStart();

</script>

<link href="{{asset('sport/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

<link href="{{asset('sport/css/style2.css')}}" rel="stylesheet" type="text/css" media="all" />


<script type="text/javascript" src="{{asset('sport/js/jquery.flexisel.js')}}"></script>

<script type="text/javascript" src="{{asset('sport/js/jquery.flexisel2.js')}}"></script>

</body>

</html>

