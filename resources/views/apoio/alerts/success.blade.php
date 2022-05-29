@extends('layouts.base')

@section('content')

  {{-- @if (Session::has('success'))
  <x-modal.modal-alert  
    :btnok="$btnOk"
    :routeok="$okRoute"
    :btncancel="$btnCancel" 
    :routecancel="$cancelRoute"
    >
    <x-slot name="title"></x-slot>
    <p>{{Session::get('success')}}</p>
    <x-slot name="msg"></x-slot>
  </x-modal.modal-alert>
  @endif --}}

  <x-modal.modal-alert  
    :btnok="$btnOk"
    :routeok="$okRoute"
    :btncancel="$btnCancel" 
    :routecancel="$cancelRoute"
    >
    <x-slot name="title"></x-slot>
    @if (isset($success))
        @foreach($success as $key => $value)
          <p>{{$value}}</p>
        @endforeach
    @endif
    <x-slot name="msg"></x-slot>
  </x-modal.modal-alert>

  

  <script 
  type="text/javascript"
  src="{{asset('js/alertModal.js')}}"
  >
  </script>
@endsection
