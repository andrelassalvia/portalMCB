@extends('layouts.base')

@section('content')

    <div class="container">  
      <div class="progress-container mx-auto">
        <div class="progress" id="progress"></div>
        <div class="circle active" title="Autorizada a OS"><i class="fa-solid fa-play"></i></div>
        <div class="circle" title="Documentos"><i class="fa-solid fa-passport"></i></div>
        <div class="circle" title="Certificação Digital"><i class="fa-solid fa-mobile-screen"></i></div>
        <div class="circle" title="Minuta"><i class="fa-solid fa-file-pdf"></i></div>
        <div class="circle" title="Video Conferência"><i class="fa-solid fa-camera"></i></div>
        <div class="circle" title="Procuração"><i class="fa-solid fa-check"></i></div>
      </div>  
      <div class="text-center">
        <button class="btn-progress" id="prev" disabled>Retroceder</button>
        <button class="btn-progress" id="next">Avançar</button>
        <button class="btn btn-success d-none" id="finish">Encerrar OS</button>
      </div>
      <div class="row mt-4 mx-auto">        
        <div class="col-4 mx-auto"> 
          <input type="hidden" id="clientId" data-id="{{$cliente->id}}">  
          <input type="hidden" id="orderId" data-orderId="{{$ordem->id}}">  
          <h2 class="text-decoration-underline">Dados da OS</h2>       
          <p class="mt-3 fs-5"><span class="text-sm me-2">Data de Início:</span>{{$ordem->data_inicio}}</p>
          <p class="mt-3 fs-5"><span class="text-sm me-2">Nome:</span>{{$cliente->nome}}</p>
          <p class="mt-3 fs-5"><span class="text-sm me-2">Demanda:</span>{{$ordem->tipoServico->nome}}</p>
          @if (isset($ordem->receita))
            <p class="mt-3 fs-5"><span class="text-sm me-2">Valor:</span>£ {{$ordem->receita}}</p>          
          @else
            <p class="mt-3 fs-5"><span class="text-sm me-2">Valor:</span>Não informado</p>              
          @endif
          @if (isset($cliente->cidadeBrasil->nome))
            <p class="mt-3 fs-5"><span class="text-sm me-2">Cidade:</span>{{$cliente->cidadeBrasil->nome}}</p>          
          @else
            <p class="mt-3 fs-5"><span class="text-sm me-2">Cidade:</span>Não informada</p>              
          @endif
          @if (isset($ordem->fornecedor->nome))
            <p class="mt-3 fs-5"><span class="text-sm me-2">Cartório:</span>{{$ordem->fornecedor->nome}}</p>            
            @else
            <p class="mt-3 fs-5"><span class="text-sm me-2">Cartório:</span>Não informado</p>              
          @endif
          <p class="mt-3 fs-5" id="situacao"><span class="text-sm me-2">Situação:</span>{{$ordem->statusOrdem->nome}}</p>
          <div id="orderFooter" class="d-flex justify-content-end me-3">
            <button 
              type="button" 
              class="btn btn-warning" 
              id="updateOrder"
            >
              Alterar Ordem
            </button>
          </div>          
        </div>
        {{-- COMMENTS --}}
        <div class="col-4 mx-auto" id="commentClient">
          <h2 class="text-decoration-underline">Comentários</h2>
          @include('admin._components.insertComments')
        </div>        
      </div>
    </div>
    
    <form action="{{route('ordens.updateStatus', $ordem->id)}}" id="updateStatus">
      @csrf
      @method('PATCH')
    </form>
    <form action="{{route('ordens.updateClassif', $ordem->id)}}" id="updateAvaliation">
      @csrf
      @method('PATCH')            
    </form>

    {{-- Modal show stars--}}
    <div class="modal fade" id="star-rate-modal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6>Avaliação do Cartório nesta O.S.</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex justify-content-center">
            <i class="fa-regular fa-star me-1 star"></i>
            <i class="fa-regular fa-star star me-1"></i>
            <i class="fa-regular fa-star star me-1"></i>
            <i class="fa-regular fa-star star me-1"></i>
            <i class="fa-regular fa-star star"></i>
          </div>
          
          <div class="modal-footer">       
            <button type="button" class="btn btn-primary" id="assessButton">Ok</button>
          </div>
        </div>
      </div>
    </div>
      
    <script type="text/javascript" src="{{asset('js/ordem/edit/progressBar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/comments/insertComments.js')}}"></script>
@endsection