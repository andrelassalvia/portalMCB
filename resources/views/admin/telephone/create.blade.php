@extends('layouts.base')

@section('content')
  {{-- trigger modal to insert a new client telephone --}}
  <x-modal.modal-alert btncancel="Cancelar" btnok="Ok">
    <x-slot name="title">Insira o telefone do cliente:</x-slot>
    <div class="container">
      <div class="row">
        <form id="telefoneStore" action="{{route('telephones.store')}}" method="post">
          @csrf
          <input type="text" name="telefone" class="form-control">
        </form>
      </div>
      <x-slot name="msg"></x-slot>
    </div>
  </x-modal.modal-alert>
  <script 
    type="text/javascript"
    src="{{asset('js/alertModal.js')}}"
    >
  </script>
@endsection