@extends('layouts.base')

@section('content')


      
      {{-- Modal coming from cliente store controller --}}
      @if (Session::has('success'))
        <x-modal-alert btncancel="Não" btnok="Sim">
          <x-slot name="title">Cadastrar OS?</x-slot>
          <p>{{Session::get('success')}}</p>
          <x-slot name="msg"></x-slot>
        </x-modal-alert>
      @endif
 
   
      {{-- Client Form --}}   
      <form 
        action="{{route('clientes.update', $cliente->id)}}" 
        method="post" 
        class="" 
        id=""
      >
        @csrf
        @method('PATCH')
        <div class="col-10 col-xl-8 mx-auto mb-5">
          <section title="Dados do cliente" class="card shadow">
            <h5 class="card-header">Dados do Cliente</h5>
          </section>
        </div>
      </form>   

      
      {{-- Service Form --}}           
 

    
      <script type="text/javascript">
        $(function(){
          $('#alertModal').modal('show');
          $('#cancelButton').on('click', function(){
            window.location.href = "{{route('clientes.last')}}"
          });
          $('#okButton').on('click', function(){
            $('#alertModal').modal('hide');
          });
        });
      </script>

    
@endsection