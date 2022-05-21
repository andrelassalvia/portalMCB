@extends('layouts.base')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 p-3 ps-xl-4 mx-auto">          
      <section class="customer-details">
        <header>
          <h3>Detalhes do Cliente</h2>
        </header>
        <form 
          action="{{route('clientes.store', $cliente->id)}}" 
          method="post" 
          id="formClientCreate"
        >
          @csrf

          {{-- Form container --}}
            <div class="p-2 border-1 shadow">

              {{-- Name Input --}}
              <div class="mb-3">
                <x-input.input-and-label
                title="Nome:"
                :id="'nome'"
                type="text"
                name="nome"
                value=""
                >
                </x-input.input-and-label>

              </div>

              {{-- Telefone Input --}}
              <div class="mb-3">
                <x-input.input-and-label
                title="Telefone:"
                :id="'telefone'"
                type="text"
                name="telefone"
                :value="$cliente->telefone"
                >
                </x-input.input-and-label>
              </div>

              {{-- Demanda Select --}}
              <div class="mb-3">
                <label for="tiposervico_id" class="form-label">Demanda:</label>
                <select
                  class="form-select"
                  name="tiposervico_id"
                  id="tipo_servico"
                >
                  <option value="">Selecione</option>
                    @foreach ($services as $item)
                      <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                </select>
              </div>

              {{-- Estado Select --}}
              <div class="mb-3">
                <label for="estadobrasil_id" class="form-label">Estado</label>
                <select 
                  class="form-select" 
                  name="estadobrasil_id" 
                  id="estado_brasil" 
                >
                  <option value="">Selecione</option>
                    @foreach ($states as $item)
                      <option value="{{$item->id}}">{{$item->nome}}</option>                
                    @endforeach            
                </select>
              </div>

              {{-- Cidade Select --}}
              <div class="mb-3">
                <label for="cidadebrasil_id" class="form-label">Cidade</label>
                <select 
                  class="form-select" 
                  name="cidadebrasil_id"
                  id="cidade_brasil"                      
                >
                  <option value="">Selecione</option>                
                </select>
              </div> 
              
              {{-- Check radios inputs --}}
              <div class="d-flex mb-3 justify-content-between">

                {{-- Firma Aberta check --}}
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

                {{-- CNH check --}}
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

                {{-- CPF check --}}
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

                {{-- Certificacao Digital check --}}
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
              {{-- <div class="form-floating">
                <textarea                       
                  class="form-control" 
                  id="comentario" 
                  name="comentario"
                  value="{{old('comentario')}}"
                ></textarea>
                <label for="comentario">Comentários</label>
              </div>                       --}}
            </div>
            
            {{-- Buttons to cancel and save --}}
            <div class="row d-flex justify-content-center mt-3">
              <a href="{{route('home')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
              <button type="submit" class="col-2 btn btn-mcb" id="submitButton">Salvar</button>  
            </div>                
        </form>
      </section>                  
    </div>
  </div>      
</div>

<script 
  type="text/javascript" 
  src="{{asset('js/clienteLoadCities.js')}}"
>
</script> 
 
@endsection