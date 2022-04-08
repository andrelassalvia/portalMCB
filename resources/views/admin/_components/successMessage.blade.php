<div class="row">
  <div class="col-md-4 offset-md-4 offset-lg-2 p-3 ps-xl-4">
    @if (Session::has('success'))
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    @endif
  </div>
</div> 