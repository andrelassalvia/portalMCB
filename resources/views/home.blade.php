@extends('layouts.base')

@section('content')

  <main>
    {{-- Mensagem de alerta --}}
    <div class="home-container">
      @include('admin._components.successMessage')     
      <div class="row">
       
        {{-- Lista Ultimos Contatos --}}
        <div class="col-lg-8 p-3 ps-xl-4">         
          <section title="Lista de potenciais clientes" class="home-clients-list mb-3 border-1"> 
            <header class="d-flex">
              <h3>Últimos Contatos</h3> 
              <a 
                class="btn btn-light ms-auto btn-sm btn-novo-cliente" 
                href="{{route('clientes.create')}}"
              >
                Novo Cliente
              </a> 
            </header> 
            <div>              
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Demanda</th>
                    <th scope="col">Firma</th>
                    <th scope="col">CNH</th>
                    <th scope="col">CPF</th>                    
                    <th width=120 scope="col" style="text-align: center">Ações</th>
                  </tr>
                </thead>
                <tbody>
                 
                  @foreach ($clientes as $item)
               {{-- {{dd($item->nome)}} --}}
                      <tr>                        
                        <th scope="row">{{$item->created_at}}</th>
                        <td data-nome="{{$item->id}}">{{$item->nome}}</td>
                        <td style="font-size: small">{{$item->telefone}}</td>
                        <td>{{$item->ordens[0]->tipoServico->nome}}</td>
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
            </div> 

            {{-- Paginacao --}}
            <div class="pagination mt-1">
              {{ $clientes->links() }}
            </div>                      
          </section>           

          {{-- Lista Ordens em andamento --}}
          <section title="Lista de ordens em andamento" class="home-orders-list border-1">
            <header class="d-flex">
              <h3>Lista de Ordens em andamento</h3>  
              <a 
              class="btn btn-light ms-auto btn-sm btn-novo-cliente" 
              href="#"
              >
                Nova OS
              </a>
            </header>  
            <div>
              @if (isset($orders))
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Data Início</th>  
                    <th scope="col">Nome</th>  
                    <th scope="col">Telefone</th>  
                    <th scope="col">Demanda</th>  
                    <th scope="col">Estado</th>  
                    <th scope="col">Cidade</th>  
                    <th scope="col" width=120 style="text-align: center">Ações</th>  
                  </tr>  
                </thead> 
                <tbody>
                  @foreach ($orders as $item) 
                  {{-- {{dd($item->cidadeBrasil->nome)}}                 --}}
                      <tr>
                        <th scope="row">{{$item->ordens[0]->data_inicio}}</th>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->telefone}}</td>
                        <td>{{$item->ordens[0]->tipoServico->nome}}</td>
                        @if (isset($item->estadoBrasil->nome))
                          <td>{{$item->estadoBrasil->nome}}</td>                            
                        @else
                          <td></td>
                        @endif
                        @if (isset($item->cidadeBrasil->nome))
                          <td>{{$item->cidadeBrasil->nome}}</td>                            
                        @else
                          <td></td>    
                        @endif
                        <td width=120>
                          <a 
                            title="Encerrar ordem de serviço" 
                            href="#" 
                            class="btn btn-sm btn-primary"
                          >
                            Encerra
                          </a>
                          <a title="Altera ordem de serviço" href="#" class="btn btn-sm btn-warning">Altera</a>
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
            <div class="pagination mt-1">
              {{ $orders->links() }}
            </div>  
          </section> 
        </div>

        {{-- Card do cliente --}}
        <aside class="col-lg-4 home-quick-links p-3 pe-lg-4 pe-xl-5">
          <div class="card">
            <h5 class="card-header">Cliente</h5>
            <div class="card-body">              
            </div>
            <div class="card-footer">
              <button class="btn btn-outline-secondary btn-sm">Alterar</button>
            </div>
          </div>          
        </aside>
      </div>
    </div>
  </main>

  @include('admin.cliente.modal.edit')

  <script>
    $(function()
    {
      $(document).on('click', 'tr', function(e)
      {
        e.preventDefault;
        var id = $(this).find('td[data-nome]').data('nome');

        $('.card-body').find('h5').remove();
        $('.card-body').find('p').remove();

        
       $.ajax({
          url: "http://192.168.1.85:8000/clientes/cards/"+id,
          type: "get",
          dataType: "json",
          timeout:5000,
          success: function(response){             
            if(response.nome !== undefined) {
              var name = response.nome;
              var comments = response.comentario;
              var h5 = "<h5 class='card-title'>"+name+"</h5>"
              var p = "<p class='card-text'>"+comments+"</p>"
              $('.card-body').append(h5);
              $('.card-body').append(p);      

            }                                                                                      
          }
       });
       $.ajax({
          url: "http://localhost:8000/clientes/cards/"+id,
          type: "get",          
          dataType: "json",
          timeout:5000,
          success: function(response){             
            if(response.nome !== undefined) {
              var name = response.nome;
              var comments = response.comentario;
              var h5 = "<h5 class='card-title'>"+name+"</h5>"
              var p = "<p class='card-text'>"+comments+"</p>"
              $('.card-body').append(h5);
              $('.card-body').append(p);      

            }                                                                                      
          }
       });
      });
    });
  </script>
@endsection
