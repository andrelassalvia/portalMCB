@extends('layouts.base')

@section('content') {{-- Show client to alter data --}}
  <div class="container">
    <div class="row mt-4 mx-auto">
      {{-- CLIENT DATA --}}
      <div class="col-4 mx-auto">
        <input type="hidden" id="clientId" data-id="{{$cliente->id}}">  
        <h4 class="text-decoration-underline">Dados do Cliente</h4>
        <div id="showClient">
          <p class="fs-6"><span class="text-sm fw-bold me-2">Nome:</span>{{$cliente->nome}}</p>
          <p class="fs-6"><span class="text-sm fw-bold me-2">Telefone:</span>{{$cliente->telefone}}</p>
          <p class="fs-6">
            <span class="text-sm fw-bold me-2">Estado:</span>
            @if (isset($cliente->estadobrasil_id))
              {{$cliente->estadoBrasil->nome}}
            @else
              {{""}}                
            @endif
          </p>
          <p class="fs-6">
            <span class="text-sm fw-bold me-2">Cidade:</span>
            @if (isset($cliente->cidadebrasil_id))
              {{$cliente->cidadeBrasil->nome}}
            @else
              {{""}}
            @endif
          </p>
          
          {{-- Firma Aberta --}}
          <p class="fs-6 d-flex align-items-center">
            <span class="text-sm fw-bold me-2">Firma Aberta:</span>
            <x-icon.document-in-index-last
              :item="$cliente"
              column="firma_aberta"
              iconSuccess="bi-check2-circle"
              iconDanger="bi-dash-circle"
            />
          </p>
          
          {{-- CNH --}}
          <p class="fs-6 d-flex align-items-center">
            <span class="text-sm fw-bold me-2">CNH:</span>
            <x-icon.document-in-index-last
              :item="$cliente"
              column="cnh"
              iconSuccess="bi-check2-circle"
              iconDanger="bi-dash-circle"
            />
          </p>
  
          {{-- CPF --}}
          <p class="fs-6 d-flex align-items-center">
            <span class="text-sm fw-bold me-2">CPF:</span>
            <x-icon.document-in-index-last
              :item="$cliente"
              column="cpf"
              iconSuccess="bi-check2-circle"
              iconDanger="bi-dash-circle"
            />
          </p>
  
          {{-- Certificacao Digital --}}
          <p class="fs-5 d-flex align-items-center">
            <span class="text-sm fw-bold me-2">Certifica????o Digital:</span>
            <x-icon.document-in-index-last
              :item="$cliente"
              column="certificacao_digital"
              iconSuccess="bi-check2-circle"
              iconDanger="bi-dash-circle"
            />
          </p>
        </div>

        {{-- BUTTONS CLIENT --}}
        <div>
          {{--When Client Is Potential --}}
          @if ($cliente->statuscliente_id == 1)
          {{-- update data button --}}
          <x-button.button-mcb
            route="clientes.edit"
            :params="$cliente->id"
            title="Alterar"
          />
          
          {{-- inactive client button --}}
          <x-button.button-danger
            route="clientes.inactive"
            :params="$cliente->id"
            title="Inativar"
          />
          @endif

          {{-- When Client Is Inactive--}}
          @if ($cliente->statuscliente_id == 2)
          {{-- reactive client --}}
          <x-button.button-mcb
            route="clientes.edit"
            :params="$cliente->id"
            title="Alterar"
          />
          <a 
            href="{{route('clientes.active', $cliente->id)}}" 
            class="btn btn-outline-success"
          >
            Reativar
          </a>
          @endif

          {{-- When Client Has An Order Running--}}
          @if ($cliente->statuscliente_id == 3)
          <x-button.button-mcb
            route="clientes.edit"
            :params="$cliente->id"
            title="Alterar"
          />
          @endif
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

          {{-- When Client Has An Order Done--}}
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
            title="Nova Ordem Servi??o"
          />@endif --}}
        </div>
      </div>

      {{-- ORDERS --}}
      <div class="col-4 mx-auto" style="max-height: 415px">
        <h4 class="text-decoration-underline">Ordens:</h4>
        <div id="clientShowListOrders">
          @foreach ($orders as $item)
          <p class="fs-6"><span class="text-sm fw-bold me-2">{{$item->updated_at}}:</span>{{$item->tipoServico->nome}}</p>
          @endforeach
        </div>

        {{-- ORDERS BUTTONS --}}
        <div>
          {{-- When Client Is Potential --}}
          @if ($cliente->statuscliente_id == 1)
            {{-- create order button --}}
            <x-button.button-mcb
            route="clientsEdit.edit"
            :params="$cliente->id"
            title="Criar Ordem Servi??o"
            />
          @endif

          {{-- When Client Is Inactive--}}

          {{-- When Client Has An Order Running--}}
          @if ($cliente->statuscliente_id == 3)
            {{-- create order button --}}
            <a href="{{route('ordens.create')}}" class="btn btn-mcb">Nova Ordem</a>
          @endif

          {{-- When Client Has An Order Done--}}
        </div>
             
      </div>
    </div>

    {{-- COMMENTS --}}
    <div class="row mt-4 mx-auto">
      <div class="col-8 mx-auto">
        <h4 class="text-decoration-underline text-center">Coment??rios</h4>
        @include('partials.comments.insertComments')   
      </div>
    </div>

    {{-- BACK BUTTON --}}
    {{-- from inactive clients --}}
    @if($cliente->statuscliente_id == 2)
      <div >
        <a href="{{session()->get('clientInactiveList')}}">
          <i class='bx bx-arrow-back' title="voltar"></i>
        </a>
      </div>
    @endif

    {{-- from potential clients --}}
    @if($cliente->statuscliente_id == 1)
      <div >
        <a href="{{session()->get('clientPotentialList')}}">
          <i class='bx bx-arrow-back' title="voltar"></i>
        </a>
      </div>
    @endif

    {{-- from with ordes clients --}}
    @if($cliente->statuscliente_id == 3)
      <div >
        <a href="{{session()->get('clientWithOrdersList')}}">
          <i class='bx bx-arrow-back' title="voltar"></i>
        </a>
      </div>
    @endif
  </div>
  <script 
    type="text/javascript" 
    src="{{asset('js/insertComments.js')}}"
  >
  </script>
@endsection