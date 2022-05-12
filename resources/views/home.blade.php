@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">

    {{-- Last contacts list --}}
    <section title="Lista de potenciais clientes" class="home-clients-list mb-3"> 
      <h3>Lista de Últimos Contatos</h3>
      <table class="table table-hover" id="tableLastContacts">
        <thead>
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            {{-- <th scope="col">Demanda</th> --}}
            <th scope="col">Firma</th>
            <th scope="col">CNH</th>
            <th scope="col">CPF</th>                    
            <th width=120 scope="col" style="text-align: center">
              <a 
              id="homeNewClientButton"
              class="btn btn-primary ms-auto btn-sm btn-novo-cliente"                   
              title="Inserir novo fornecedor"
              href="{{route('clientes.create')}}"
              >
                Novo Cliente
              </a>
            </th>
          </tr>
        </thead>
        <tbody>         
          @foreach ($clientes as $item)           
              <tr>                        
                <th scope="row">{{$item->created_at}}</th>
                <td data-nome="{{$item->id}}">{{$item->nome}}</td>
                <td style="font-size: small">{{$item->telefone}}</td>
                {{-- <td>{{$item->ordens[0]->tipoServico->nome}}</td> --}}
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
                <td width=120>
                  <a 
                    class="btn btn-success btn-sm"
                    href="{{route('clientes.edit', $item)}}"
                  >
                    OS
                  </a>
                  <a 
                    class="btn btn-danger btn-sm" 
                    type="button" 
                    data-bs-toggle="modal"
                    data-bs-target="#inativarModal"
                  >
                    Inativar
                  </a>
                </td>                     
              </tr>
              @endforeach
            </tbody>                    
          </table>
    </section> 

    {{-- Orders List --}}
    <section title="Lista de ordens em andamento" class="home-orders-list">
      <h3>Lista de Ordens em Andamento</h3>   
      <div>        
        
        @if (isset($orders))
        <table class="table table-hover" id="tableOrders">
          <thead>
            <tr>
              <th scope="col">Data Início</th>  
              <th scope="col">Nome</th>  
              <th scope="col">Telefone</th>  
              <th scope="col">Demanda</th>  
              <th scope="col">Estado</th>  
              <th scope="col">Cidade</th>  
              <th scope="col" width=120 style="text-align: center">
                <a 
                class="btn btn-primary ms-auto btn-sm btn-novo-cliente" 
                href="#"
                >
                  Nova OS
                </a>
              </th>  
            </tr>  
          </thead> 
          <tbody>
            @foreach ($orders as $item)   
                <tr>
                  <th scope="row">{{$item->data_inicio}}</th>
                  <td data-nome="{{$item->id}}">{{$item->nome}}</td>
                  <td>{{$item->telefone}}</td>
                  <td>{{$item->tipoServico->nome}}</td>
                  @if (isset($item->cliente->estadoBrasil->nome))
                    <td>{{$item->cliente->estadoBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>
                  @endif
                  @if (isset($item->cliente->cidadeBrasil->nome))
                    <td>{{$item->cliente->cidadeBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>    
                  @endif
                  <td width=120 style="text-align: center">
                    <a 
                      title="Encerrar ordem de serviço" 
                      href="#" 
                      class="btn btn-sm btn-success"
                    >
                      Encerra
                    </a>                   
                  </td>
                </tr>
            @endforeach
          </tbody> 
        </table>
        @endif                
      </div> 
      <div>
        <a href="">{{-- Botao para ver todos as ordens --}}</a>
      </div>
      
    </section>  

    {{-- Client Details Modal --}}
    @include('apoio.comentarios.modal.clientes')
    
  </div>
</div>

  @include('admin.cliente.modal.edit')

  <script type="text/javascript" src="{{asset('js/home/home.js')}}"></script>

  
@endsection
