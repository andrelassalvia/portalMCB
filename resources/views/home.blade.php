@extends('layouts.base')

@section('content')

  <main>
    <div class="home-container">
      <div class="row">
        <div class="col-md-4 offset-md-4 offset-lg-2 p-3 ps-xl-4">
          @if (Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif
        </div>
      </div>      
      <div class="row">

        {{-- Lista Ultimos Contatos --}}
        <div class="col-lg-8 p-3 ps-xl-4">         
          <section class="home-clients-list mb-3 border-1"> 
            <header>
              <h3>Últimos Contatos</h3>  
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
                          <a class="btn btn-success btn-sm">OS</a>
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
            <div class="pagination">
              {{ $clientes->links() }}
            </div>           
          </section>           

          {{-- Ordens em andamento --}}
          <section class="home-orders-list">
            <header>{{-- Header Lista ordens em andamento --}}
              <h3>Lista de Ordens</h3>  
            </head>  
            <div>
              <table>{{-- tabela com a lista das ultimas ordens e botoes --}}</table>  
            </div> 
            <div>
              <a href="">{{-- Botao para ver todos as ordens --}}</a>
            </div>
          </section> 
        </div>

        <aside class="col-lg-4 home-quick-links p-3 pe-lg-4 pe-xl-5">
          <div class="card">
            <h5 class="card-header">Cliente</h5>
            <div class="card-body">
              {{-- <h5 class="card-title">Andre Lassalvia</h5>
              <p class="card-text">This is some text within a card body.</p> --}}
            </div>
            <div class="card-footer">
              <button class="btn btn-outline-secondary btn-sm">Alterar</button>
            </div>
          </div>
          {{-- <header>
            <h3>Links</h3>
          </header>
          <div>
            <ul>
              <li><a href="{{route('clientes.create')}}">Novo Cliente</a></li>
              <li><a href="">Cadastro Fornecedores</a></li>
              <li><a href="">Cadastro Serviços</a></li>
              <li><a href="">Cadastro Ordens de Serviço</a></li>              
            </ul>
          </div> --}}
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

         // AJAX 
       $.ajax({
          url: "http://localhost:8000/clientes/cards/"+id,
          type: "get",
          dataType: "json",
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
