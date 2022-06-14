  @extends('layouts.base')

  @section('content')
  <div class="container">
    <div class="row">      
      <section id="fornecedoresIndexLista" title="Lista de fornecedores" class="home-clients-list">
        <h3>Lista de Fornecedores</h3>
        <table class="table table-hover table-borderless mx-auto" id="fornecedoresTable">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th class="d-none" scope="col">Id</th>
              <th scope="col">Estado</th>
              <th scope="col">Cidade</th>
              {{-- <th scope="col">Classificação</th> --}}
              <th scope="col">Contato</th>
              <th scope="col">Zap</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>              
              <th>
                <a 
                  id="fornecedorIndexInsertButton"
                  class="btn btn-success btn-sm"                   
                  title="Inserir novo fornecedor"
                  href="{{route('fornecedores.create')}}"
                >
                  Novo
                </a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($providers as $item)                    
                <tr>                  
                  <th>{{$item->nome}}</th>  
                  <td class="d-none">{{$item->id}}</td> {{-- Passing id to DataTable in JS--}}
                  @if (isset($item->estadoBrasil->nome))
                    <td>{{$item->estadoBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>
                  @endif
                  @if (isset($item->cidadeBrasil->nome))
                    <td>{{$item->cidadeBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>
                  @endif                                 
                  {{-- @switch($item->classificacao_id)
                      @case(2)
                        <td class="one-star">★</td>                          
                        @break  
                      @case(3)
                        <td>★★</td>                   
                        @break
                      @case(4)
                        <td>★★★</td>
                        @break
                      @case(5)
                        <td>★★★★</td>
                        @break
                      @case(6)
                        <td class="five-stars">★★★★★</td>
                        @break
                      @default
                        <td>Sem classificação</td>                        
                  @endswitch --}}
                  <td>{{$item->nome_contato}}</td>                  
                  <td>{{$item->zap}}</td>
                  <td>{{$item->telefone}}</td>
                  <td>{{$item->email}}</td>    
                  @if (isset($ordem))
                    <td>
                      <a 
                        href="{{route('providers.select', [$item->id, $ordem])}}"
                        class="btn btn-sm btn-mcb choose-provider-button" 
                        id=""
                        title="Selecionar este fornecedor"
                      >
                      Selecionar
                      </a>
                    </td>
                  @else
                    <td>
                      <a 
                        class="btn btn-sm btn-mcb choose-provider-button"                         
                        id=""
                        title="Selecionar este fornecedor"
                        data-value="{{$item->id}}"  
                        data-name="{{$item->nome}}"                               
                      >
                        Selecionar
                      </a>
                  </td>                          
                  @endif
                  
                </tr>
            @endforeach            
          </tbody>
        </table>
    </div>
  </div>
  {{-- DataTable --}}
  <script type="text/javascript" src="{{asset('js/tableContacts.js')}}"></script>
  @endsection
