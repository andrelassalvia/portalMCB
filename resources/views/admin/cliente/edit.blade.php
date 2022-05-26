@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-3 ps-xl-4 mx-auto">          
      <section class="customer-details">
        <header>
          <h3>Detalhes do Cliente</h2>
        </header>
        <form action="{{route('clientes.update', $cliente->id)}}" id="formClientEdit" method="POST">
          @csrf
          @method('PATCH')
          <input type="hidden" value="{{$cliente->id}}" id="clienteId">

          {{-- Include partial Blade with form for client --}}
            @include('partials.forms.clientBasicForm')
            
            {{-- Buttons to cancel and save --}}
            <div class="row d-flex justify-content-center mt-3">
              <a href="{{route('clientes.last')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
              <input value="Salvar" type="submit" class="col-2 btn btn-mcb" id="submitButton">  
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