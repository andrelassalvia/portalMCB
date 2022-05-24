@extends('layouts.base')

@section('content') {{-- Show client to alter data --}}
  <div class="container" id="showClient">
    <div class="row mt-4 mx-auto">
      {{-- CLIENT DATA --}}
      <div class="col-4 mx-auto">
        <input type="hidden" id="clientId" data-id="{{$cliente->id}}">  
        <h2 class="text-decoration-underline">Dados do Cliente</h2>
        <p class="mt-3 fs-5"><span class="text-sm me-2">Último contato:</span>{{$cliente->created_at}}</p>
        <p class="mt-3 fs-5"><span class="text-sm me-2">Nome:</span>{{$cliente->nome}}</p>
        <p class="mt-3 fs-5"><span class="text-sm me-2">Telefone:</span>{{$cliente->telefone}}</p>
        
        {{-- Firma Aberta --}}
        <p class="mt-3 fs-5 d-flex align-items-center">
          <span class="text-sm me-2">Firma Aberta:</span>
          <x-icon.document-in-index-last
            :item="$cliente"
            column="firma_aberta"
            iconSuccess="bi-check2-circle"
            iconDanger="bi-dash-circle"
          />
        </p>
        
        {{-- CNH --}}
        <p class="mt-3 fs-5 d-flex align-items-center">
          <span class="text-sm me-2">CNH:</span>
          <x-icon.document-in-index-last
            :item="$cliente"
            column="cnh"
            iconSuccess="bi-check2-circle"
            iconDanger="bi-dash-circle"
          />
        </p>

        {{-- CPF --}}
        <p class="mt-3 fs-5 d-flex align-items-center">
          <span class="text-sm me-2">CPF:</span>
          <x-icon.document-in-index-last
            :item="$cliente"
            column="cpf"
            iconSuccess="bi-check2-circle"
            iconDanger="bi-dash-circle"
          />
        </p>

        {{-- Certificacao Digital --}}
        <p class="mt-3 fs-5 d-flex align-items-center">
          <span class="text-sm me-2">Certificação Digital:</span>
          <x-icon.document-in-index-last
            :item="$cliente"
            column="certificacao_digital"
            iconSuccess="bi-check2-circle"
            iconDanger="bi-dash-circle"
          />
        </p>

        <a class="btn btn-mcb" href="{{route('clientes.edit', $cliente->id)}}">Alterar Dados</a>
        <a class="btn btn-mcb">Criar Ordem Serviço</a>
      </div>
      {{-- COMMENTS --}}
      <div class="col-4 mx-auto">
        <h2 class="text-decoration-underline">Comentários</h2>
          @include('partials.comments.insertComments')        
      </div>
    </div>
  </div>
  <script 
    type="text/javascript" 
    src="{{asset('js/insertComments.js')}}"
  >
  </script>
@endsection