@extends('layouts.base')

@section('content')

  @if (Session::has('success'))
  <x-modal.modal-alert  btncancel="Ok" btnok="">
    <x-slot name="title">Alteração</x-slot>
    <p>{{Session::get('success')}}</p>
    <x-slot name="msg"></x-slot>
  </x-modal.modal-alert>
  @endif

  <script 
  type="text/javascript"
  src="{{asset('js/alertModal.js')}}"
  >
  </script>
@endsection
