@extends('layouts.base')

@section('content')

{{-- ESTE EDIT, VISTO QUE CLIENTE JA EXISTE, NAO PODE SER SOMENTE COM OS DADOS INICIAIS DE CONTATO
  REFAZER COM A MESMA BASE DE ORDEM CREATE BLADE A PARTE DE CLIENTES --}}

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-3 ps-xl-4 mx-auto">          
      <section class="customer-details">
        <header>
          <h3>Detalhes do Cliente</h2>
        </header>
        <form action="{{route('clientes.update', $cliente->id)}}" id="formClientEdit" method="POST">
          @csrf
          @method('PATCH')
          <input type="hidden" value="{{$cliente->id}}" id="clienteId">
            <div class="p-2 border-1 shadow">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    id="nome" 
                    name="nome"
                    value="{{$cliente->nome}}"
                  >
              </div>
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="telefone" 
                  name="telefone"
                  value="{{$cliente->telefone}}"
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
                  @if (isset($cliente->ordens[0]))
                    @foreach ($services as $item)
                      <option 
                        value="{{$item->id}}" {{$item->id == $cliente->ordens[0]->tiposervico_id ? 'selected' : ''}}
                      >
                        {{$item->nome}}
                      </option>
                    @endforeach
                  @else
                    @foreach ($services as $item)
                      <option 
                        value="{{$item->id}}" 
                      >
                        {{$item->nome}}
                      </option>
                    @endforeach
                  @endif
                </select>
              </div>  

              <div class="mb-3">
                <label for="estadobrasil_id" class="form-label">Estado:</label>
                <select 
                  class="form-select" 
                  name="estadobrasil_id" 
                  id="estado_brasil" 
                >
                  <option value="">Selecione</option>
                  @isset($states)
                    @foreach ($states as $item)
                      <option value="{{$item->id}}"{{$item->id == $cliente->estadobrasil_id ? 'selected' : ''}}>
                        {{$item->nome}}
                      </option>                
                    @endforeach                                  
                  @endisset
                </select>
              </div>
              <div class="mb-3">
                <label for="cidadebrasil_id" class="form-label">Cidade:</label>
                <select 
                  class="form-select" 
                  name="cidadebrasil_id"
                  id="cidade_brasil"                      
                >
                  <option value="">Selecione</option>
                  @isset($cities)
                  @foreach ($cities as $item)
                  <option value="{{$item->id}}"{{$item->id == $cliente->cidadebrasil_id ? 'selected' : ''}}>
                    {{$item->nome}}
                  </option> 
                @endforeach  
                  @endisset 
             
                </select>
              </div>      
              <div class="d-flex mb-3 justify-content-between">
                <div class="form-check me-3">                      
                    <input type="hidden" name="firma_aberta" value="0">
                    <input 
                      class="form-check-input" 
                      type="checkbox" 
                      name="firma_aberta" 
                      value="1" {{$cliente->firma_aberta == 1 ? 'checked' : ''}}
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
                    value="1" {{$cliente->cnh == 1 ? 'checked' : ''}}
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
                    value="1" {{$cliente->cpf == 1 ? 'checked' : ''}}
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
                    value="1" {{$cliente->certificacao_digital == 1 ? 'checked' : ''}}
                    id="certificacao_digital"
                  >
                  <label class="form-check-label" for="certificacao_digital">
                    Certificação Digital
                  </label>
                </div>
              </div>                                     
            </div>    
            <div class="row d-flex justify-content-center mt-3">
              <a href="{{route('clientes.last')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
              <input value="Salvar" type="submit" class="col-2 btn btn-mcb" id="submitButton">  
            </div>                        
        </form>                      
      </section>                  
    </div>
    @if (isset($errors) && count($errors) > 0)
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
          </div>
          <div class="modal-footer">       
            <button type="button" class="btn btn-sm btn-mcb" id="okButton">Ok</button>
          </div>
        </div>
      </div>
    </div>        
    @endif
  </div>      
</div>
  
 <script type="text/javascript" src="{{asset('js/cliente/clienteLoadCities.js')}}"></script> 
                 
@endsection