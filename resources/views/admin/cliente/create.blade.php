@extends('partials.clients.createEdit')

@section('form')
  <form 
    action="{{route('clientes.store')}}" 
    method="post" 
    id="formClientCreate"
  >
    @csrf

{{-- Include partial Blade with form for client --}}
    @include('partials.forms.clientBasicForm')
  
{{-- Buttons to cancel and save --}}
    @include('partials.clients.buttonsFormsCreateEdit')
    
  </form>

  <script 
    type="text/javascript" 
    src="{{asset('js/loadCities.js')}}"
  >
  </script> 
@endsection