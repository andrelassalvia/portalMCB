<div id="commentClientBody">
  <div class="card mb-3" id="clientModalCard" style="border: none">
                                      
    {{-- Form to input a new comment --}}
    <form action="{{route('comentarios.store')}}" method="post" id="formInputComment">
      @csrf            
    </form>
  </div>
</div>
<div id="commentClientFooter" class="d-flex justify-content-end me-3">
  <button 
    type="button" 
    class="btn" 
    id="clientModalNewComment"
  >
    Inserir Comentário
  </button>
</div>