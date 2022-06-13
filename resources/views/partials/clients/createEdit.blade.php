@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 p-3 ps-xl-4 mx-auto">
        <section class="customer-details">
          <header>
            <h3>Detalhes do Cliente</h2>
          </header>
          @yield('form')
        </section>
      </div>
    </div>
  </div>
    
@endsection