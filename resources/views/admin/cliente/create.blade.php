@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-3 ps-xl-4 mx-auto">          
      <section class="customer-details">
        <header>
          <h3>Detalhes do Cliente</h2>
        </header>
        <form 
          action="{{route('clientes.store')}}" 
          method="post" 
          id="formClientCreate"
        >
          @csrf

          {{-- Include partial Blade with form for client --}}
          @include('partials.forms.clientBasicForm')
            
          {{-- Buttons to cancel and save --}}
          <div class="row d-flex justify-content-center mt-3">
            <a href="{{route('clients.potential')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
            <button type="submit" class="col-2 btn btn-mcb" id="submitButton">Salvar</button>  
          </div>                
        </form>
      </section>  
    </div>
  </div>      
</div>

<script 
  type="text/javascript" 
  src="{{asset('js/loadCities.js')}}"
>
</script> 
 
@endsection