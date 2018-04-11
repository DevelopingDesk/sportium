@extends('dashboard')

@section('content')

<h2 style="color: green;text-align: center;"> <b>Orders List</h2>
<table class="table table-hover" style="margin:10px">
    <thead style="background-color:white">
       
    </thead>
<tbody>
     @foreach($order as $orders) 
 
       <td>
         <h4 style="color: blue">Country:{{$orders->country}}</h4>
       <h5 style="color: red">phone:{{$orders->phone}}</h5>
       <p style="color: brown">Date:{{$orders->created_at}}</p>
            
            </td>
<td> <a href="{{route('order.delete',$orders->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a></td>


@foreach($orders->cart as $cart)
 <tr>
           
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>SIZE</th>
            <th>QUANTITY</th>
            

        </tr>
@foreach($cart as $product)

         <tr>
              <td>
                 <img src="{{asset($product->name)}}" height="40px" width="40px" style="border-radius: 30px;">
              </td>


              <td>
                  {{$product->price}}
                 
              </td>
            
                <td>
                
                   {{$product->options->size}}  
      

              </td>
              <td>
               {{$product->qty}}  
    
   </td>
   

    
         </tr>
       
@endforeach

@endforeach


@endforeach
    </tbody>
    
  
</table>
{{$order->links()}}
@endsection