<div 
  class="modal fade" 
  id="occupationModal" 
  tabindex="-1" 
  aria-labelledby="occupationModalLabel" 
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">             
      <div class="modal-body p-3">
        <div class="row">            
          <div class="col">
            <form 
              action="{{route('occupation.store')}}" 
              method="POST" 
              id="occupation-form-create"
            >
              @csrf
              <label class="form-label" for="name">Inserir nova ocupação:</label>
              <input class="form-control" type="text" name="nome">
            </form>                
          </div>
        </div>                                                                           
      </div>
      <div class="modal-footer">
        <a 
          class="btn btn-sm btn-secondary" 
          type="button"
          id="btn-occupation-dismiss"
        >
          Cancelar
        </a>
        <a 
          id="btn-occupation-create" 
          type="button" 
          class="btn btn-primary btn-sm"          
        >
          Salvar
        </a>            
      </div>
    </div>
  </div>
</div>


    
