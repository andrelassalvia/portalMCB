  <div class="container">
    <div class="row">      
      <section id="fornecedoresIndexLista" title="Lista de fornecedores" class="home-clients-list">
        <h3>Lista de Fornecedores</h3>
        <table class="table table-hover table-borderless mx-auto" id="fornecedoresTable">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Estado</th>
              <th scope="col">Cidade</th>
              <th scope="col">Classificação</th>
              <th scope="col">Contato</th>
              <th scope="col">Zap</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>              
              <th>
                <a 
                  id="fornecedorIndexInsertButton"
                  class="btn btn-success btn-sm"                   
                  title="Inserir novo fornecedor"
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
                  @switch($item->classificacao_id)
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
                  @endswitch
                  <td>{{$item->nome_contato}}</td>                  
                  <td>{{$item->zap}}</td>
                  <td>{{$item->telefone}}</td>
                  <td>{{$item->email}}</td>    
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
                </tr>
            @endforeach            
          </tbody>
        </table>
    </div>
  </div>
