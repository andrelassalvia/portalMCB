
<div 
  class="modal fade" 
  id="providerModal" 
  tabindex="-1" 
  aria-labelledby="providerLabel" 
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Inserir novo fornecedor</h4>  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>        
      <div class="modal-body p-3">
        <div class="row">            
          <div class="col-12">   
            <form action="{{route('fornecedores.store')}}" method="post">
              @csrf
              {{-- Hidden input - New provider doesn't have classification --}}
              <input type="hidden" name="classificacao_id" value="1">
              <div class="mb-2">
                <label for="fornecedorCreateNome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="fornecedorCreateNome" class="form-control">
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateContato" class="form-label">Contato:</label>
                <input type="text" name="nome_contato" id="fornecedorCreateContato" class="form-control">
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateTelefone" class="form-label">Telefone:</label>
                <input type="text" name="telefone" id="fornecedorCreateTelefone" class="form-control">
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateEmail" class="form-label">Email:</label>
                <input type="email" name="email" id="fornecedorCreateEmail" class="form-control">
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateZap" class="form-label">Zap:</label>
                <input type="text" name="zap" id="fornecedorCreateZap" class="form-control">
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateEstadoBrasil" class="form-label">Estado:</label>
                <select name="estadobrasil_id" id="fornecedorCreateEstadoBrasil" class="form-select">
                  <option value="">Selecione</option>   
                  @foreach ($estados as $item)
                    <option value="{{$item->id}}">{{$item->nome}}</option>   
                  @endforeach               
                </select>
              </div>
              <div class="mb-2">
                <label for="fornecedorCreateCidadeBrasil" class="form-label">Cidade:</label>
                <select name="cidadebrasil_id" id="fornecedorCreateCidadeBrasil" class="form-select">
                  <option value="">Selecione</option>
                </select>
              </div>
            </form>             
          </div>
        </div>                                                                           
      </div>
      <div class="modal-footer">
        <a 
          class="btn btn-sm btn-mcb" 
          type="button"
          id="btn-fornecedor-dismiss"
        >
          Cancelar
        </a>
        <a 
          id="btn-fornecedor-create" 
          type="button" 
          class="btn btn-mcb btn-sm"          
        >
          Salvar
        </a>           
      </div>
    </div>
  </div>
</div>


    
