@extends('layouts.base')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 p-3 ps-xl-4 mx-auto">
        <section class="customer-details">
          <header>
            <h3>Detalhes do Fornecedor</h3>
          </header>
          <form 
            action="{{route('fornecedores.create')}}"
            method="post"
            id="createProvider"
          >
            @csrf
            @include('partials.forms.providerBasicForm')
          </form>
        </section>
      </div>
    </div>
  </div>

    {{-- Load cities options --}}
    <script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script>
@endsection