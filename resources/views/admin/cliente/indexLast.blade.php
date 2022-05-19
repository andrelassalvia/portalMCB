@extends('layouts.base')

@section('content')
  {{-- Last contacts list --}}
  <section title="Lista de potenciais clientes" class="home-clients-list"> 
    <h3>Lista de Últimos Contatos</h3>
    <table class="table table-hover table-borderless mx-auto" id="tableContacts">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th class="d-none" scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Demanda</th>
          <th scope="col">Firma</th>
          <th scope="col">CNH</th>
          <th scope="col">CPF</th>                    
          <th scope="col"></th>                    
          
        </tr>
      </thead>
      <tbody>         
        @foreach ($clientes as $item)           
            <tr>                        
              <th scope="row">{{$item->created_at}}</th>
              <td class="d-none">{{$item->id}}</td>
              <td>{{$item->nome}}</td>
              <td style="font-size: small">{{$item->telefone}}</td>
              <td>
                @isset($item->ordens[0])
                  {{$item->ordens[0]->tipoServico->nome}}
                @endisset
              </td>
              <td>                  
                  @if ($item->firma_aberta == 1)
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-check2-circle text-success" 
                      viewBox="0 0 16 16">
                      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                  @else
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-dash-circle text-danger" 
                      viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  @endif                          
                
              </td>
              <td>
                
                  @if ($item->cnh == 1)
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-check2-circle text-success" 
                      viewBox="0 0 16 16">
                      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                  @else
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-dash-circle text-danger" 
                      viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  @endif                          
                
              </td>
              <td>                      
                  @if ($item->cpf == 1)
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-check2-circle text-success" 
                      viewBox="0 0 16 16">
                      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                  @else
                    <svg 
                      xmlns="http://www.w3.org/2000/svg" 
                      width="16" 
                      height="16" 
                      fill="currentColor" 
                      class="bi bi-dash-circle text-danger" 
                      viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg>
                  @endif                                            
              </td>   
              <td>
                <button class="btn btn-sm btn-outline-danger">Inativar</button>
              </td>
            </tr>
            @endforeach
          </tbody>                    
        </table>
  </section>
  {{-- Js to show modal --}}
  @if (Session::has('success'))
    <x-modal-alert  btncancel="" btnok="Ok">
      <x-slot name="title">Alteração</x-slot>
      <p>{{Session::get('success')}}</p>
      <x-slot name="msg"></x-slot>
    </x-modal-alert>
  @endif
  <script 
    type="text/javascript" 
    src="{{asset('js/tableContacts.js')}}"
    >
  </script>
  <script 
    type="text/javascript"
    src="{{asset('js/alertModal.js')}}"
    >
  </script>
@endsection