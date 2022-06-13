@extends('layouts.base')

@section('content')

<div>
  <form 
    action="{{route('clientes.update', $cliente->id)}}" 
    id="formClientEdit" 
    method="POST"
  >
    @csrf
    @method('PATCH')
    <div class="col-10 col-xl-8 mx-auto mb-4 mt-5">
      @include('partials.forms.clientAllDataForm')
    </div>
    <div class="col-10 col-xl-8 mx-auto mb-4 d-flex justify-content-between">
      <x-button.button-mcb
          route="clientes.show"
          :params="$cliente->id"
          title="Cancelar"
        />
        <button class="btn btn-mcb" type="submit">Salvar</button>
    </div>
      {{-- Buttons to cancel and save --}}
      <div class="row d-flex justify-content-center mt-3">
        <a href="{{route('clients.potential')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
        <input value="Salvar" type="submit" class="col-2 btn btn-mcb" id="submitButton">  
      </div>                        
  </form> 
</div>
  
<script 
  type="text/javascript" 
  src="{{asset('js/loadCities.js')}}"
>
</script> 
                 
@endsection

