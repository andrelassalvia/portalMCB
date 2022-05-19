{{-- Modal Inativar --}}
@if (isset($item))
<form action="{{route('clientes.inactive', $item)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('patch')
  <div class="modal fade" id="inativarModal" tabindex="-1" aria-labelledby="inativarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inativarModalLabel">Deseja inativar este cliente?</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3">
          <div class="row">
            <label class="col-3 form-label text-end" for="nome">Nome:</label>
            <div class="col-9">
              <p class="form-text">{{$item->nome}}</p>
            </div>
          </div>
          <div class="row">
            <label class="col-3 form-label text-end" for="nome">Telefone:</label>
            <div class="col-9">
              <p class="form-text">{{$item->telefone}}</p>
            </div>
          </div>          
          {{-- <div class="row">
            <label class="col-3 form-label text-end" for="nome">Demanda:</label>
            <div class="col-9">
              <p class="form-text">{{$item->tipoServico->nome}}</p>
            </div>
          </div>                                                                        --}}
        </div>
        <div class="modal-footer">
          <a href="{{route('home')}}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
          <button type="submit" class="btn btn-danger">Inativar</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endif