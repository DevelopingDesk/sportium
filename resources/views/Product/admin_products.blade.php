@extends('dashboard')

@section('content')

<div class="table-responsive">
    

<table class="table table-condensed" id="users-table">
        <thead>
            <tr>
             <th>id</th>
                <th>Name</th>
                
                <th>Color</th>
                <th>Code</th>
                <th>Size</th>
               
               
                <th>Action</th>
                
                
            </tr>
        </thead>
    </table>

</div>




<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('products.data') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'color', name: 'color' },
            { data: 'code', name: 'code' },
            { data: 'size', name: 'size' },

        
           
            { data: 'action', name: 'action' }

            
            
            
           

        ]
    });
});
</script>
@endsection
