@extends('layouts.base')

@section('content')
    
  <div id="new-OS-view">
    {{-- Client Form --}}   
    
        
        {{-- Service Form --}}  
    <form 
      action="{{route('ordens.update', $ordemId)}}" 
      method="post" 
      class=""
      id=""
    >
      @csrf
      @method('PATCH')
      {{-- Hiddden Inputs --}}
      <input 
        type="hidden"
        name="cliente_id"
        value="{{$cliente->id}}"
      >
      <input
         type="hidden"
         name="statuscliente_id"
         value="3"
       >
      <input 
        type="hidden"
        name="statusordem_id"
        value="1"
      >
      <div class="col-10 col-xl-8 mx-auto mb-4">
        <section title="Dados da OS" class="card shadow">
          <h5 class="card-header">Dados da Ordem de Serviço</h5>
            <div class="card-body">
              <div class="row mb-3 mx-auto">

                {{-- Tipo de servico Select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="tiposervico_id"
                    title="Tipo de Serviço"
                    :id="'tipoServico'"
                    req="*"
                  >
                    <option value="">Selecione</option>
                    <x-select.option-foreach-and-isset
                      :arr="$demandas"
                      value="id"
                      :object="$ordem->tipoServico"
                      foreignId="id"
                      column="nome"
                    />
                  </x-select.select-and-label>
                </div>

                {{-- Fornecedor Input --}}
                <div class="col-md-6">
                  <div class="d-flex justify-content-between">
                    <label for="fornecedor" class="form-label">Fornecedor:</label>
                    <a 
                      class="btn btn-sm btn-mcb" 
                      id="select-provider-button"
                      title="Selecionar fornecedor"  
                      href="{{route('fornecedores.index')}}"                      
                    >
                      Selecionar
                    </a>
                  </div>
                  <div class="d-none">
                    <input 
                      id="providerInput"
                      class="form-control" 
                      type="hidden" 
                      name="fornecedor_id"                                                 
                    >
                  </div>
                  <div>
                    <input 
                      id="providerName"
                      class="form-control" 
                      type="text"                                                 
                    >
                  </div>
                </div>
              </div>

              {{-- DATAS DE INICIO E CONCLUSAO - VERIFICAR NECESSIDADE --}}
              <div class="row mb-3 d-none">
                <div class="col-md-6">
                  <label for="dataInicio" class="form-label">Data Início:</label>
                  @if ($ordem->data_inicio)
                    <input 
                      type="date" 
                      class="form-control" 
                      name="data_inicio" 
                      id="dataInicio"
                      value="{{$ordem->data_inicio}}"
                    >
                  @endif
                </div>
                <div class="col-md-6">
                  <label for="dataConclusão" class="form-label">Data de Conclusão:</label>
                  <input 
                    type="date" 
                    class="form-control"                         
                    name="data_fim" 
                    id="dataConclusão"
                  >
                </div>
              </div> 

              {{-- VALORES --}}
              <div class="row mb-3 mx-auto">

                {{-- Receita Input --}}
                <div class="col-md-4">
                  <label class="form-label" for="receita">Receita:</label>
                  <input class="form-control" type="number" step="0.01" name="receita" value="{{$ordem[0]->receita ?? old('receita')}}">
                </div>

                {{-- Custo Input --}}
                <div class="col-md-4">
                  <label class="form-label" for="custo">Custo:</label>
                  <input class="form-control" type="number" step="0.01" name="custo" value="{{$ordem[0]->custo ?? old('custo')}}">
                </div>

                {{-- Cotacao Input --}}
                <div class="col-md-4">
                  <label class="form-label" for="cotacao">Cotação Moeda:</label>
                  <input class="form-control" type="number" step="0.01" name="cotacao" value="{{$ordem[0]->cotacao ?? old('cotacao')}}">
                </div>
              </div>  
              
              {{-- Comentario refatorar --}}
              <div class="row mb-3 mx-auto">
                <div class="col-md-12">
                  <label for="comentario" class="form-label">Comentários</label>
                  <textarea name="comentario" class="form-control"></textarea>                    
                </div>  
            </div>
        </section>
      </div> 
      <div class="text-center mb-5">
        <x-button.button-mcb
          route="clients.potential"
          params=""
          title="Cancelar"
        />
        <button 
          title="Salvar dados da Ordem de Serviço" 
          id="submitButton" 
          class="btn btn-mcb"
        >
          Salvar
        </button>
      </div>
    </form>
  </div> 

    {{-- Modal to create occupations --}}
    @include('apoio.occupation.modal.create')

      {{-- Dropdown list of cities --}}
    <script type="text/javascript" src="{{asset('js/loadCities.js')}}"></script> 

    {{-- Create new occupation and feed it dropdown --}}
    <script type="text/javascript" src="{{asset('js/occupation.js')}}"></script>

    

    {{-- Manage providers forms --}}
    <script type="text/javascript" src="{{asset('js/fornecedor/index/manageProvider.js')}}"></script>

     {{-- Send both forms at the same time --}}
     <script type="text/javascript" src="{{asset('js/ordem/create/sendForms.js')}}"></script>

@endsection