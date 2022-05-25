{{-- HTML to show modal with validation error when creating a new client
  It's necessary because the regular behavior is return to back page when 
  errors is showing. 
  We need a fresh page to show validation errors to avoid conflict --}}
  @extends('layouts.base')

  @section('content')
      
    @if (isset($errors) && count($errors) > 0)
    <x-modal.modal-alert btncancel="" btnok="Ok">
      <x-slot name="title">Erro de gravação</x-slot>
      @foreach ($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
      <x-slot name="msg"></x-slot>
    </x-modal.modal-alert>
    @endif
  
    <script
      type="text/javascript"
      src="{{asset('js/alertModal.js')}}"
      >
    </script>
  
  @endsection