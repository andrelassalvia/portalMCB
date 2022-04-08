<div class="row">
  <div class="col-md-4 offset-md-4 offset-lg-2 p-3 ps-xl-4">
    @if (isset($errors) && count($errors)>0)
      <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
      </div>
    @endif
  </div>        
</div>