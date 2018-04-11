@if(Session::has('flash_message'))
<div id="msg" class="alert alert-{{Session::get('flash_message_level')}} alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    {!! Session::get('flash_message') !!}
</div>
<script type="text/javascript">
    window.setTimeout(function() {
        $("#msg").fadeTo(500, 0,function(){
        $("#msg").remove(); 
    });
        
    
}, 3000);
</script>
@endif
