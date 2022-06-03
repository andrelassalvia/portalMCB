@extends('layouts.base')

@section('content')
  <div>
    <form 
    action="{{route('clientsEdit.update', $cliente->id)}}" 
    method="post" 
    class="" 
    id=""
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
        <button class="btn btn-mcb" type="submit">Prosseguir</button>
      </div>
    </form>   
  </div>

  {{-- Modal to create occupations --}}
  @include('apoio.occupation.modal.create')

  {{-- Dropdown list of cities --}}
  <script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script> 

  {{-- Create new occupation and feed it dropdown --}}
  <script type="text/javascript" src="{{asset('js/occupation.js')}}"></script>

@endsection