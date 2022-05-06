@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-3 ps-xl-4 mx-auto">          
      <section class="customer-details">
        <header>
          <h3>Detalhes do Cliente</h2>
        </header>
        <form action="{{route('clientes.store')}}" method="post" id="formClientCreate">
          @csrf
            <div class="p-2 border-1 shadow">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="nome" 
                  name="nome"
                  value="{{old('nome')}}"
                >
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="telefone" 
                  name="telefone"
                  value="{{old('telefone')}}"
                  >
              </div>
              <div class="mb-3">
                <label for="tipo_servico" class="form-label">Demanda:</label>
                <select
                  class="form-select"
                  name="tipo_servico"
                  id="tipo_servico"
                >
                <option value="">Selecione</option>
                @foreach ($services as $item)
                    <option 
                      value="{{$item->id}}" {{old('tipo_servico') == $item->id ? 'selected' : ''}}
                    >
                      {{$item->nome}}
                    </option>
                @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="estado_brasil" class="form-label">Estado</label>
                <select 
                  class="form-select" 
                  name="estado_brasil" 
                  id="estado_brasil" 
                >
                  <option value="">Selecione</option>
                  @foreach ($states as $item)
                    <option value="{{$item->id}}">
                      {{$item->nome}}
                    </option>                
                  @endforeach            
                </select>
              </div>
              <div class="mb-3">
                <label for="cidade_brasil" class="form-label">Cidade</label>
                <select 
                  class="form-select" 
                  name="cidade_brasil"
                  id="cidade_brasil"                      
                >
                  <option value="">Selecione</option>                
                </select>
              </div>      
              <div class="d-flex mb-3 justify-content-between">
                <div class="form-check me-3">                      
                    <input type="hidden" name="firma_aberta" value="0">
                    <input 
                      class="form-check-input" 
                      type="checkbox" 
                      name="firma_aberta" 
                      value="1" {{old('firma_aberta') == 1 ? 'checked' : ''}}
                      id="firma_aberta"
                    >
                    <label class="form-check-label" for="firma_aberta">
                      Firma aberta
                    </label>                                                
                </div>
                <div class="form-check me-3">                      
                  <input type="hidden" name="cnh" value="0">
                  <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="cnh" 
                    value="1" {{old('cnh') == 1 ? 'checked' : ''}}
                    id="cnh"
                  >
                  <label class="form-check-label" for="cnh">
                    CNH
                  </label>
                </div>
                <div class="form-check me-3">
                  <input type="hidden" name="cpf" value="0">
                  <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="cpf" 
                    value="1" {{old('cpf') == 1 ? 'checked' : ''}}
                    id="cpf"
                  >
                  <label class="form-check-label" for="cpf">
                    CPF
                  </label>
                </div>
                <div class="form-check">
                  <input type="hidden" name="certificacao_digital" value="0">
                  <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="certificacao_digital" 
                    value="1" {{old('certificacao_digital') == 1 ? 'checked' : ''}}
                    id="certificacao_digital"
                  >
                  <label class="form-check-label" for="certificacao_digital">
                    Certificação Digital
                  </label>
                </div>
              </div>  
              <div class="form-floating">
                <textarea                       
                  class="form-control" 
                  id="comentario" 
                  name="comentario"
                  value="{{old('comentario')}}"
                ></textarea>
                <label for="comentario">Comentários</label>
              </div>                      
            </div>                          
        </form>
        <div class="row d-flex justify-content-center mt-3">
          <a href="{{route('home')}}" class="col-2 btn btn-outline-secondary me-2">Cancelar</a>  
          <button type="submit" class="col-2 btn btn-outline-secondary" id="submitButton">Salvar</button>  
        </div>                
      </section>                  
    </div>
    @include('apoio.modals.alertModal')                   
  </div>      
</div>
  
  <script type="text/javascript" src="{{asset('js/cliente/create/manageForm.js')}}"></script> 
 

{{-- Script para recuperar old estado e cidade - validacao falhar --}}
 <script type="text/javascript">
  $(document).ready(function(){

    var urlsLoadCidades = [
        'http://192.168.1.85:8000/clientes/load_cidades/',
        'http://localhost:8000/clientes/load_cidades/',
      ]; 

    var oldEstado = '{{old('estado_brasil')}}';
    var oldCidade = '{{old('cidade_brasil')}}';
  
    if(oldEstado !==''){
      $('#estado_brasil').val(oldEstado);
      
      if(oldCidade !==''){
        $('#cidade_brasil').find('option').remove();
        $.each(urlsLoadCidades, function(i, u){

          $.ajax(u+oldEstado, {

            dataType:'json',
            type:'get',
            success:function(data){
              
              for (let i = 0; i < data.length; i++) {
                const elementId = data[i].id;
                const elementName = data[i].nome;
                
                if(elementId == oldCidade){
                  
                  var option = "<option value='"+elementId+"'>"+elementName+"</option>";
                  
                  $('#cidade_brasil').append(option);
                }                
              }
            }
          });
        });
      }
    }
  });
</script>
@endsection