@if(Session::has('warning_message'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Oops!</strong> {{ Session::get('warning_message') }}
</div>
@endif