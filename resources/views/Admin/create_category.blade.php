@extends('dashboard')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>adding category</title>
</head>
<body>
<form action="{{route('post.category')}}" method="post" enctype="multipart/form-data" >
	<div class="row">
<div class="col-md-6">
<input type="text" name="name" class=" form-control" placeholder="add new category">

		</div> 
<div class="col-md-2">
<input type="file" name="images">

		</div> 
{{csrf_field()}}
<div class="col-md-2">
	

<button class="btn btn-success">Save Category</button>
</div>
	


	</div>
	<hr>
	<h2>Categories</h2>
	<div class="row">
		@foreach($category as $cat)
		<div class="col-md-3 col-sm-6 m-b-10">
        <div class="tiles purple">
          <div class="tiles-body">
            <div class="controller"> <a class="reload" href="{{route('delete.category',$cat->id)}}"></a> <a class="remove" href="{{route('delete.category',$cat->id)}}"></a> </div>
            <div class="tiles-title"> {{$cat->name}}</div>
            <div class="heading"> <span data-animation-duration="1200" data-value="" class="animate-number"></span></div>
            
            <div class="description"><a href="{{route('get.subcategory',$cat->id)}}" class="hashtags transparent">Add Subcategory</a></div>
          </div>
        </div>
      </div>
      @endforeach
	</div>


</form>

</body>
</html>

@endsection