@extends('layouts.base')

@section('content')
    
  <div id="new-OS-view">
    {{-- Client Form --}}   
    <form 
    action="{{route('clientes.update', $cliente->id)}}" 
    method="post" 
    class="" 
    id=""
    >
      @csrf
      @method('PATCH')
      <div class="col-10 col-xl-8 mx-auto mb-4 mt-5">
        <section title="Dados do cliente" class="card shadow">
          <h5 class="card-header">Dados do Cliente</h5>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">

                {{-- Hidden inputs --}}
                <input 
                  type="hidden"
                  data-id="{{$cliente->id}}"
                >
                <input
                  type="hidden"
                  data-pais_id="{{$cliente->pais_id}}"
                >
                <input
                  type="hidden"
                  name="statuscliente_id"
                  value="3"
                >

                {{-- Client name --}}
                <x-input.input-and-label
                  id="nomeCliente"
                  title="Nome:"
                  type="text"
                  name="nome"
                  :value="$cliente->nome"
                  req=""
                />
              </div>

              {{-- Client telefone --}}
              <div class="col-md-6">
                <x-input.input-and-label
                  id="telefoneCliente"
                  title="Telefone:"
                  type="text"
                  name="telefone"
                  :value="$cliente->telefone"
                  req="*"
                />
              </div>
            </div>

            <div class="row mb-3">

              {{-- Cliente email --}}
              <div class="col-md-6">
                <x-input.input-and-label
                  id="emailCliente"
                  title="Email:"
                  type="email"
                  name="email"
                  :value="$cliente->email"
                  req=""
                />
              </div>

              {{-- Client occupation --}}
              <div class="col-md-6">
                <label for="occupation" class="form-label">Ocupação:</label>
                <div class="d-flex">
                  <select name="occupation_id" id="occupation" class="form-select me-2">
                    <option value="">Selecione</option>
                    @foreach ($occupations as $occupation)
                      <option value="{{$occupation->id}}">{{$occupation->nome}}</option>
                    @endforeach
                  </select>
                  <a 
                    type="button"
                    id="plusButton" 
                    title="Incluir ocupação"
                    href="#"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                  </a> 
                </div>
              </div>
            </div>
            <div class="row mb-3">

              {{-- Birth Date --}}
              <div class="col-md-6">
                <x-input.input-and-label
                  id="dataNascimento"
                  title="Data de Nascimento:"
                  type="date"
                  name="data_nascimento"
                  :value="$cliente->data_nascimento"
                  req=""
                />
              </div>

              {{-- Marital status --}}
              <div class="col-md-6">
                <x-select.select-and-label
                  name="maritalstatus_id"
                  title="Estado Civil:"
                  :id="'maritalStatus'"
                  req=""
                >
                  <option value="">Selecione</option>
                  <x-select.option-foreach-and-isset
                    :arr="$maritalStatus"
                    value="id"
                    :object="$cliente"
                    foreignId="maritalstatus_id"
                    column="nome"
                  />
                </x-select.select-and-label>
              </div>
            </div>
            <label for="" class="form-label">Documentos:</label>
              <div class="row mb-3">
                <div class="col-12 d-md-flex">
                  <div class="form-check d-flex d-md-block col-2 align-items-center">

                    {{-- Firma Aberta Check --}}
                    <x-input.check-and-label
                    :obj="$cliente"
                    name="firma_aberta"
                    :id="'firma_aberta'"
                    title="Firma aberta"
                    />
                  </div>

                  {{-- CNH check --}}
                  <div class="form-check col-2">
                    <x-input.check-and-label
                      :obj="$cliente"
                      name="cnh"
                      :id="'cnh'"
                      title="CNH"
                    />
                  </div>

                  {{-- CPF check --}}
                  <div class="form-check col-2">
                    <x-input.check-and-label
                      :obj="$cliente"
                      name="cpf"
                      :id="'cpf'"
                      title="CPF"
                    />
                  </div>

                  {{-- Certificacao check --}}
                  <div class="form-check col-2">
                    <x-input.check-and-label
                      :obj="$cliente"
                      name="certificacao_digital"
                      :id="'certificacao_digital'"
                      title="Certificação"
                    />
                  </div>

                  {{-- RG check --}}
                  <div class="form-check col-2">
                    <x-input.check-and-label
                      :obj="$cliente"
                      name="rg"
                      :id="'rg'"
                      title="RG"
                    />
                  </div>

                  {{-- passaporte check --}}
                  <div class="form-check col-2">
                    <x-input.check-and-label
                      :obj="$cliente"
                      name="passaporte"
                      :id="'passaporte'"
                      title="Passaporte"
                    />
                  </div>
                </div>                      
              </div>
              <div class="row mb-3">

                {{-- Estado Select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="estadobrasil_id"
                    title="Estado:"
                    :id="'estado_brasil'"
                    req=""
                  >
                    <option value="">Selecione</option>
                      <x-select.option-foreach-and-isset
                        :arr="$estados"
                        value="id"
                        :object="$cliente"
                        foreignId="estadobrasil_id"
                        column="nome"
                      />
                  </x-select.select-and-label>
                </div>

                {{-- Cidade Select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="cidadebrasil_id"
                    title="Cidade:"
                    :id="'cidade_brasil'"
                    req=""
                  >
                    @isset($cidades)
                      <option value="">Selecione</option>
                    @endisset
                  </x-select.select-and-label>
                </div>
              </div> 
              <div class="row mb-3">

                {{-- Pais select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="pais_id"
                    title="País:"
                    :id="'pais'"
                    req=""
                  >
                    <option value="">Selecione</option>
                      <x-select.option-foreach-and-isset
                        :arr="$countries"
                        value="id"
                        :object="$cliente"
                        foreignId="pais_id"
                        column="nome"
                      />
                  </x-select.select-and-label>
                </div>

                {{-- Cidade Exterior select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="cidade_id"
                    title="Cidade no Exterior:"
                    :id="'cidade'"
                    req=""
                  >
                    @isset($cities)
                      <option value="">Selecione</option>                
                    @endisset
                  </x-select.select-and-label>
                </div>
              </div>
              <div class="row mb-3">

                {{-- RG File --}}
                <div class="col-md-3">
                  <x-input.input-and-label
                    :id="'rgFileCliente'"
                    title="RG:"
                    type="file"
                    name="rg_file"
                    value=""
                    req=""
                  />
                </div>

                {{-- Passaporte File --}}
                <div class="col-md-3">
                  <x-input.input-and-label
                    :id="'passaporteFileCliente'"
                    title="Passaporte:"
                    type="file"
                    name="passaporte_file"
                    value=""
                    req=""
                  />
                </div>

                {{-- CNH File --}}
                <div class="col-md-3">
                  <x-input.input-and-label
                    :id="'cnhFileCliente'"
                    title="CNH:"
                    type="file"
                    name="cnh_file"
                    value=""
                    req=""
                  />
                </div>

                {{-- Comprovante endereco file --}}
                <div class="col-md-3">
                  <x-input.input-and-label
                    :id="'enderecoFileCliente'"
                    title="Endereço:"
                    type="file"
                    name="endereco_file"
                    value=""
                    req=""
                  />
                </div>
              </div> 
          </div>
        </section>
      </div>
    </form>   
        
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