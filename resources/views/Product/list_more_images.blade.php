@extends('dashboard')

@section('content')


<div class="table-responsive">
    

<table class="table table-condensed" id="users-table">
        <thead>
            <tr>
             <th>id</th>
                <th>Name</th>
                
                <th>image</th>
                
               
               
                <th>Action</th>
                
                
            </tr>
@foreach($mor as $mo)
            <tr>
            	<td>{{$mo->id}}</td>
            	<td>{{$mo->name}}</td>
            	<td> <img src="{{asset($mo->image)}}" height="25px" width="25px" style="border-radius: 32px"></td>
            	<td><a href="{{route('delete.more',$mo->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a></td>

            </tr>
            @endforeach
        </thead>
    </table>

</div>

@endsection