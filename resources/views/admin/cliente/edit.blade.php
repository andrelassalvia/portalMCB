@extends('partials.clients.createEdit')

@section('form')
  <form 
    action="{{route('clientes.update', $cliente->id)}}" 
    method="POST"
    id="formClientEdit" 
  >
    @csrf
    @method('PATCH')

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