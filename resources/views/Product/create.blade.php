@extends('dashboard')


@section('content')

@include('message');

@if($product !=null)
<div class="col-md-6 col-md-offset-2" style="margin-top:10px">
<form method="post" enctype="multipart/form-data" action="{{route('update.product')}}" >
    {{csrf_field()}}

	<div class="panel panel-success">
			<input type="hidden" name="id" value="{{$product->id}}">
	


			

<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="name" class="form-control" placeholder="Product name " value="{{$product->name}}">
					</div>

			</div>


			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="color" class="form-control" placeholder="Product color (Not Necessary)" value="{{$product->color}}">
					</div>

			</div>

			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="code" class="form-control" placeholder="Product code (Not Necessary)" value="{{$product->code}}">
					</div>

			</div>


			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="size" class="form-control" placeholder="Product Size (Not Necessary)" value="{{$product->size}}">
					</div>

			</div>
			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="price" class="form-control" placeholder="Product price (Not Necessary)" value="{{$product->price}}">
					</div>

			</div>
			
				

				

			
<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="description" class="form-control" placeholder="Product description (Not Necessary)" value="{{$product->description}}">
					</div>

			</div>
			
			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="file" name="images" class="form-control" placeholder="Product image" value="{{$product->image}}">
						<input type="hidden" name="images" class="form-control" placeholder="Product image" value="{{$product->image}}">
					</div>

			</div>
			
			<div class="form-group">
					
						
						<input type="checkbox" name="status" value="1"  >Featured:
					

			</div>
			
			<div class="form-group">
				<center> <input type="submit" class="btn btn-success" value="Update"> </center>
				<input type="hidden" value="{{$product->subcategory_id}}" name="subcategory_id">

			</div> 


		</div>
	</div>
 </form>
</div>
@else

<div class="col-md-6 col-md-offset-2" style="margin-top:10px">
<form method="post" enctype="multipart/form-data" action="{{route('product.store')}}" >
    {{csrf_field()}}

	<div class="panel panel-success">
			
		<div class="panel-body ">
			<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Product Name">
					</div>

			 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

			</div>


			



			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="color" class="form-control" placeholder="Product color (Not Necessary)">
					</div>

			</div>

			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="code" class="form-control" placeholder="Product code (Not Necessary)">
					</div>

			</div>


			<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="size" class="form-control" placeholder="Product Size (Not Necessary)">
					</div>

			</div>
			<div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="Product Price(Not Necessary)">
					</div>

					@if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif

			</div>

			

			<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i> </span>
						<input type="text" name="description" value="{{ old('description') }}" class="form-control" placeholder="Product Description">
					</div>
					@if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif

			</div>

			<div class="form-group {{ $errors->has('images') ? ' has-error' : '' }}">
    				<input type="file" name="images" value="{{ old('images
    				') }}" id="images" class="filestyle" data-placeholder="Upload Product Picture" data-iconName="glyphicon glyphicon-upload" data-buttonName="btn-primary" data-buttonText="" accept="image/x-png,image/gif,image/jpeg,image/jpg ">
    				@if ($errors->has('images'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('images') }}</strong>
                                    </span>
                                @endif
			</div>
			<div class="form-group">
					
						
						<input type="checkbox" name="status" value="1"  >Featured:
					

			</div>
			
			<div class="form-group">
				<center> <input type="submit" class="btn btn-success" value="Upload"> </center>
				<input type="hidden" value="{{$subcategory_id}}" name="subcategory_id">

			</div> 


		</div>
	</div>
 </form>
</div>
@endif
@endsection
