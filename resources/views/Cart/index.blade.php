
<!DOCTYPE HTML>
<html>
<head>
<title>index</title>
<link href="{{asset('sport/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link href="{{asset('sport/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('sport/animate.min.html')}}">
<link href="{{asset('sport/css/dropdown.css')}}" rel="stylesheet">
<body>
<!--header strat here-->
<div class="header">
	<div class="container">
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
<a href="{{route('cart.index')}}">                <img src="{{asset('sport/images/basket.png')}}" class="img-responsive zo2 ">
</a>                </div>
                </div>
            </div>
		@include('Partials.navbar')
		  </div>
   </div>
 </div>
</div>
	</div>
</div>
<!--header end here-->
<!--start-ckeckout-->
	<div class="container" style="text-align: center;">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			
				
			
				
			<div class="in-check" >
				
			
				<div class="container">
 
        <div class="row"><column id="column-left" class="col-sm-3 hidden-xs">
    
  </column>
                <div id="content" class="col-sm-9">
      
      
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr style="color: blue">
                <td class="text-center">Image</td>
                
                <td class="text-left">Size</td>
                <td class="text-left">Quantity</td>
                <td class="text-right">Unit Price</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
                       <?php foreach(Cart::content() as $row) :?>
                        
                            <tr>
                          
                          <form action="{{route('Cart.update',$row->rowId)}}" method="post"  >
                          {{csrf_field()}}
                <td class="text-center">                 
                 <img src="<?php echo $row->name?>" alt="Barber Scissors" title="Barber Scissors" width="80px"  />
                  </td>

   <td class="text-left">  <?php echo ($row->options->has('size') ? $row->options->size : ''); ?></td>
                 <td>
                <form method="post" action="{{route('Cart.update',$row->rowId)}}">
                   {{csrf_field()}}
                   <div class="col-md-3 col-sm-12 col-xs-12 col-xs-offset-0 {{ $errors->has('qty') ? ' has-error' : '' }}" style="margin-left: -15px">  
                      <input type="number" min="1" name="qty" value="<?php echo $row->qty; ?>" class="form-control" required>

                                 @if ($errors->has('qty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qty') }}</strong>
                                    </span>
                                @endif
 
                   </div>
                   <div class="col-md-2 col-xs-12 col-sm-12 col-xs-offset-0;" style="padding: 5px;margin-right: 10px"><button  class="btn btn-danger "><i class="fa fa-refresh">Update</i></button>
                   </div>
                </form>
                <form method="post" action="{{route('Cart.remove',$row->rowId)}}">
                {{csrf_field()}}
                 <div class="col-md-1" style="padding: 5px">
                <button  class=" btn btn-danger "><i class="fa fa-times-circle"></i>Remove</button>
                </div>
                </form>     
              </td>
                <td class="text-right"><?php echo Cart::subtotal(); ?></td>
                <td class="text-right"><?php echo Cart::total(); ?></td>
              </tr>
                   <?php endforeach;?>

                                        </tbody>
          </table>
        </div>
     
      
    
            <br />
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
                        <tr>
              <td class="text-right"><strong style="color: blue">Sub-Total:</strong></td>
              <td class="text-right"><?php echo Cart::subtotal(); ?></td>
            </tr>
                        <tr>
              <td class="text-right"><strong style="color: blue">Total:</strong></td>
              <td class="text-right"><?php echo Cart::total();?></td>
            </tr>
                      </table>
        </div>
      </div>
      <div class="buttons">
        
        <div class="pull-right"><a href="{{route('check.out')}}" class="btn btn-danger" style="color: white">Checkout</a></div>
      </div>
      </div>
    </div>
</div>

				
				
			</div>
			</div>  
		 </div>
		</div>
		<br>
<!--end-ckeckout-->
<!--footer strat here-->
@include('Partials.footer')
<!--footer end here-->
</body>
</html>