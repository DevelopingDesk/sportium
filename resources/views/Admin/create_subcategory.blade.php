@extends('dashboard')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>adding subcategory</title>
</head>
<body>
<form action="{{route('post.subcategory')}}" method="post" enctype="multipart/form-data">
	<div class="row">
<div class="col-md-7">
	<input type="hidden" name="categoryid" value="{{$categoryid}}">
<input type="text" name="name" class=" form-control" placeholder="add new subcategory">
		</div> 
		<div class="col-sm-2">
<input type="file" name="images">
			
		</div>

{{csrf_field()}}
<div class="col-md-3"> 
<button class="btn btn-success">Save subcategory</button>
	
</div>

	


	</div>
	<hr>
	<h2>SubCategories</h2>
	<div class="row">
		@foreach($subcategory as $cat)
		<div class="col-md-3 col-sm-6 m-b-10">
        <div class="tiles blue">
          <div class="tiles-body">
            <div class="controller"> <a class="reload" href="{{route('delete.subcatgory',$cat->id)}}"></a> <a class="remove" href="{{route('delete.subcatgory',$cat->id)}}"></a> </div>
            <div class="tiles-title"> {{$cat->name}}</div>
            <div class="heading"> <span data-animation-duration="1200" data-value="" class="animate-number"></span></div>
            
            <div class="description"><a href="{{route('get.product',$cat->id)}}" class="hashtags transparent">Upload Products</a></div>
          </div>
        </div>
      </div>
      @endforeach
	</div>


</form>

</body>
</html>

@endsection