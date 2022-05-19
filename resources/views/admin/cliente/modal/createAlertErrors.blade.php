@extends('layouts.base')

@section('content')
    
  @if (isset($errors) && count($errors) > 0)
  <x-modal-alert btncancel="" btnok="Ok">
    <x-slot name="title">Erro de gravação</x-slot>
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    <x-slot name="msg"></x-slot>
  </x-modal-alert>
  @endif

  <script>
    $(function(){
      $('#alertModal').modal('show');
      $('#okButton').on('click', function(){
        window.history.back();
      });
    });
  </script>
@endsection