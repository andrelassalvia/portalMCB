@extends('layouts.base')

@section('content')
    <div class="container">
      <div class="row mt-4 mx-auto">
        <div class="col-4 mx-auto">
          <input type="hidden" id="clientId" data-id="{{$cliente->id}}">  
          <h2 class="text-decoration-underline">Dados do Cliente</h2>
          <p class="mt-3 fs-5"><span class="text-sm me-2">Último contato:</span>{{$cliente->created_at}}</p>
          <p class="mt-3 fs-5"><span class="text-sm me-2">Nome:</span>{{$cliente->nome}}</p>
          <p class="mt-3 fs-5"><span class="text-sm me-2">Telefone:</span>{{$cliente->telefone}}</p>
          @if ($cliente->firma_aberta == 1)
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">Firma aberta:</span>
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="16" 
                height="16" 
                fill="currentColor" 
                class="bi bi-check2-circle text-success" 
                viewBox="0 0 16 16"
              >
                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
              </svg>
          </p>                        
          @else
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">Firma aberta:</span>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="16" 
              height="16" 
              fill="currentColor" 
              class="bi bi-dash-circle text-danger" 
              viewBox="0 0 16 16"
            >
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </p>          
          @endif
          @if ($cliente->cnh == 1)
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">CNH:</span>
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="16" 
                height="16" 
                fill="currentColor" 
                class="bi bi-check2-circle text-success" 
                viewBox="0 0 16 16"
              >
                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
              </svg>
          </p>                        
          @else
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">CNH:</span>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="16" 
              height="16" 
              fill="currentColor" 
              class="bi bi-dash-circle text-danger" 
              viewBox="0 0 16 16"
            >
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </p>          
          @endif
          @if ($cliente->cpf == 1)
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">CPF:</span>
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="16" 
                height="16" 
                fill="currentColor" 
                class="bi bi-check2-circle text-success" 
                viewBox="0 0 16 16"
              >
                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
              </svg>
          </p>                        
          @else
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">CPF:</span>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="16" 
              height="16" 
              fill="currentColor" 
              class="bi bi-dash-circle text-danger" 
              viewBox="0 0 16 16"
            >
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </p>          
          @endif
          @if ($cliente->certificacao_digital == 1)
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">Certificação Digital:</span>
              <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="16" 
                height="16" 
                fill="currentColor" 
                class="bi bi-check2-circle text-success" 
                viewBox="0 0 16 16"
              >
                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
              </svg>
          </p>                        
          @else
          <p class="mt-3 fs-5 d-flex align-items-center">
            <span class="text-sm me-2">Certificação Digital:</span>
            <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="16" 
              height="16" 
              fill="currentColor" 
              class="bi bi-dash-circle text-danger" 
              viewBox="0 0 16 16"
            >
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
            </svg>
          </p>          
          @endif
          <a class="btn">Alterar Dados</a>
          <a class="btn">Criar Ordem Serviço</a>
        </div>
        {{-- COMMENTS --}}
        <div class="col-4 mx-auto">
          <h2 class="text-decoration-underline">Comentários</h2>
            @include('admin._components.insertComments')        
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{asset('js/comments/insertComments.js')}}"></script>
@endsection