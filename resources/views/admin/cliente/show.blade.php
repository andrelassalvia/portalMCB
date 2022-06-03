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

        {{-- when client is potential --}}
        @if ($cliente->statuscliente_id == 1)
        {{-- update data button --}}
        <x-button.button-mcb
          route="clientes.edit"
          :params="$cliente->id"
          title="Alterar"
        />
        {{-- create order button --}}
        <x-button.button-mcb
          route="clientsEdit.edit"
          :params="$cliente->id"
          title="Criar Ordem Serviço"
        />
         {{-- inactive client button --}}
        <x-button.button-danger
          route="clientes.inactive"
          :params="$cliente->id"
          title="Inativar"
        />
        @endif

        {{-- when client is inactive--}}
        @if ($cliente->statuscliente_id == 2)
        {{-- reactive client --}}
        <x-button.button-mcb
          route="clientes.active"
          :params="$cliente->id"
          title="Reativar"
        />
        {{-- create new order --}}
        <x-button.button-mcb
          route="clientsEdit.edit"
          :params="$cliente->id"
          title="Criar Ordem Serviço"
        />
        @endif

        {{-- when client has an order running--}}
        {{-- @if ($client->statusclient_id == 3) --}}
        {{-- end order --}}
        {{-- <x-button.button-mcb
          route=""
          :params=""
          title="Encerrar Ordem"
        /> --}}
        {{-- update order --}}
        {{-- <x-button.button-mcb
          route=""
          :params=""
          title="Alterar"
        />
        @endif --}}

        {{-- when client has an order done--}}
        {{-- @if ($client->statusclient_id == 4) --}}
            {{-- potential client again --}}
        {{-- <x-button.button-mcb
        route=""
        :params=""
        title="Potencial"
      /> --}}
        {{-- new order --}}
        {{-- <x-button.button-mcb
          route=""
          :params=""
          title="Nova Ordem Serviço"
        />@endif --}}

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