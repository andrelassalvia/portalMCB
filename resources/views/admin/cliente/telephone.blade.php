@extends('layouts.base')

@section('content')
    {{-- trigger modal --}}
  <x-modal-alert btncancel="Cancelar" btnok="Ok">
    <x-slot name="title">Insira o telefone do cliente:</x-slot>
    <div class="container">
      <div class="row">
        <form id="telefoneStore" action="{{route('clientes.telephoneStore')}}" method="post">
          @csrf
          <input type="text" name="telefone" class="form-control">
        </form>
      </div>
      <x-slot name="msg">
        @if( isset($errors) && count($errors) > 0 )
          <div class="alert alert-warning" role="alert" style="width: 100%">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif
      </x-slot>
    </div>
  </x-modal-alert>
  <script type="text/javascript">
    $(function(){
      $('#alertModal').modal('show');
      $('#okButton').on('click', function(){
        $('#telefoneStore').submit();
      });
      $('#cancelButton').on('click', function(){
        $('#alertModal').modal('hide');
      });
    });
    </script>
@endsection