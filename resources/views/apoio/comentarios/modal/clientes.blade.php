<div class="modal fade" id="clientDetailsModal" tabindex="-1" aria-labelledby="clientDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header" id="clientModalHeader">
        <h5 class="modal-title" id="clientDetailsModalTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        {{-- CARD --}}
        <div class="card mb-3" id="clientModalCard">
          
                                      
          {{-- Form to input a new comment --}}
          <form action="{{route('comentarios.store')}}" method="post">
            @csrf            
            <input type="text" class="form-control" id="inputComment" name="comentario">
          </form>
        </div>
       
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        <button 
          type="button" 
          class="btn btn-primary" 
          id="clientModalNewComment"
        >
          Inserir Comentário
        </button>
        <button 
          type="button" 
          class="btn btn-primary" 
          id="clientModalSaveComment"
        >
          Salvar
        </button>
        
      </div>
    </div>
  </div>
</div>