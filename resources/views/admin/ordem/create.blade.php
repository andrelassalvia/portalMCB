@extends('layouts.base')

@section('content')

    <main title="Salvar Ordem de Servico" id="new-OS-view">
      @include('admin._components.errorMessage')
   
      {{-- Client Form --}}      
      <form action="{{route('clientes.update', $cliente)}}" method="POST" id="clientUpdate" class="formUpdate">
        @csrf     
        @method('PATCH')
          <div class="col-10 col-xl-8 mx-auto mb-5">
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
                      <label for="nomeCliente" class="form-label">Nome:</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        name="nome" 
                        id="nomeCliente"
                        value="{{$cliente->nome ?? old('nome')}}"
                      >
                    </div>
                    <div class="col-md-6">
                      <label for="telefoneCliente" class="form-label">Telefone:</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        placeholder="(+xx)0xxx-xxx-xxx" 
                        name="telefone" 
                        id="telefoneCliente"
                        value="{{$cliente->telefone ?? old('telefone')}}"
                      >
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="emailCliente" class="form-label">Email:</label>
                      <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        id="emailCliente"
                        value="{{$cliente->email ?? old('email')}}"
                      >
                    </div>
                    <div class="col-md-6">
                      <label for="occupation" class="form-label">Ocupação:</label>
                      <div class="d-flex">
                        <select 
                          class="form-select me-2" 
                          name="occupation_id" 
                          id="occupation" 
                        >
                          <option value="">Selecione</option>
                          @foreach ($occupations as $key => $item)                        
                            <option value="{{$item->id}}" {{$cliente->occupation_id == $item->id ? 'selected' : ''}} >
                              {{$item->nome}}
                            </option>                
                          @endforeach            
                        </select>  
                        <button 
                          type="button"
                          id="plusButton" 
                          title="Incluir ocupação"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                          </svg>
                        </button>                   
                      </div>                    
                    </div>                    
                  </div> 
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
                      <input 
                        type="date" 
                        class="form-control"                         
                        name="data_nascimento" 
                        id="dataNascimento"
                        value="{{$cliente->data_nascimento ?? old('data_nascimento')}}"
                      >
                    </div>
                    <div class="col-md-6">
                      <label for="maritalStatus" class="form-label">Estado Civil:</label>
                      <select 
                        class="form-select" 
                        name="maritalstatus_id" 
                        id="maritalStatus" 
                      >
                        <option value="">Selecione</option>
                        @foreach ($maritalStatus as $key => $item)                        
                          <option value="{{$item->id}}" {{$cliente->maritalstatus_id == $item->id ? 'selected' : ''}} >
                            {{$item->nome}}
                          </option>                
                        @endforeach            
                      </select>
                    </div>
                  </div> 
                  <label for="" class="form-label">Documentos:</label>
                    <div class="row mb-3">
                      <div class="col-12 d-md-flex">
                        <div class="form-check d-flex d-md-block col-2 align-items-center">
                          @if ($cliente->firma_aberta == 1)
                            <input 
                              type="checkbox" 
                              name="firma_aberta" 
                              value="1" 
                              checked 
                              id="firma_aberta"
                            >
                          @else
                            <input 
                              type="hidden" 
                              name="firma_aberta" 
                              value="0" 
                              id="firma_aberta"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="firma_aberta" 
                              value="1" {{old('firma_aberta') == 1 ? 'checked' : ''}} 
                              id="firma_aberta"
                            >                          
                          @endif
                          <label class="form-check-label" for="firma_aberta">
                            Firma aberta
                          </label>
                        </div>
                        <div class="form-check col-2">
                          @if ($cliente->cnh == 1)
                            <input 
                              type="checkbox" 
                              name="cnh" 
                              checked 
                              id="cnh"
                              value="1"
                            >
                          @else
                            <input 
                              type="hidden" 
                              name="cnh" 
                              value="0"
                              id="cnh"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="cnh" 
                              value="1" {{old('cnh') == 1 ? 'checked' : ''}}
                              id="cnh"
                            >                          
                          @endif
                          <label class="form-check-label" for="cnh">
                            CNH
                          </label>
                        </div>
                        <div class="form-check col-2">
                          @if ($cliente->cpf == 1)
                            <input 
                              type="checkbox" 
                              name="cpf"
                              checked 
                              id="cpf"
                              value="1"
                            >    
                          @else
                            <input 
                              type="hidden" 
                              name="cpf" 
                              value="0"
                              id="cpf"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="cpf" 
                              value="1" {{old('cpf') == 1 ? 'checked' : ''}}
                              id="cpf"
                            >                          
                          @endif
                          <label class="form-check-label" for="cpf">
                            CPF
                          </label>
                        </div>
                        <div class="form-check col-2">
                          @if ($cliente->certificacao_digital == 1)
                            <input 
                              type="checkbox"                            
                              name="certificacao_digital"
                              checked 
                              id="certificacao_digital"
                              value="1"
                            >    
                          @else
                            <input 
                              type="hidden" 
                              name="certificacao_digital" 
                              value="0"
                              id="certificacao_digital"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="certificacao_digital" 
                              value="1" {{old('certificacao_digital') == 1 ? 'checked' : ''}}
                              id="certificacao_digital"
                            >                          
                          @endif
                          <label class="form-check-label" for="certificacao_digital">
                            Certificação Digital
                          </label>
                        </div>
                        <div class="form-check col-2">
                          @if ($cliente->rg == 1)
                            <input 
                              type="checkbox"
                              name="rg"
                              checked
                              id="rg"
                              value="1"
                            >                            
                          @else
                            <input 
                              type="hidden" 
                              name="rg" 
                              value="0"
                              id="rg"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="rg" 
                              value="1" {{old('rg') == 1 ? 'checked' : ''}}
                              id="rg"
                            >                            
                          @endif
                          <label class="form-check-label" for="rg">
                            RG
                          </label>
                        </div>
                        <div class="form-check col-2">
                          @if ($cliente->passaporte == 1)
                              <input 
                                type="checkbox"
                                name="passaporte"
                                checked
                                id="passsaporte"
                                value="1"
                              >
                          @else
                            <input 
                              type="hidden" 
                              name="passaporte" 
                              value="0"
                              id="passaporte"
                            >
                            <input 
                              class="form-check-input" 
                              type="checkbox" 
                              name="passaporte" 
                              value="1" {{old('passaporte') == 1 ? 'checked' : ''}}
                              id="passaporte"
                            >                            
                          @endif
                          <label class="form-check-label" for="passaporte">
                            Passaporte
                          </label>
                        </div>
                      </div>                      
                    </div> 
                                                                                                                    
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="estado_brasil" class="form-label">Estado:</label>
                      <select 
                        class="form-select" 
                        name="estadobrasil_id" 
                        id="estado_brasil" 
                      >
                        <option value="">Selecione</option>
                        @foreach ($states as $key => $item)                        
                          <option value="{{$item->id}}" {{$cliente->estadobrasil_id == $item->id ? 'selected' : ''}} >
                            {{$item->nome}}
                          </option>                
                        @endforeach            
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="cidade_brasil" class="form-label">Cidade:</label>
                      <select 
                        class="form-select" 
                        name="cidadebrasil_id"
                        id="cidade_brasil"
                      >
                        <option value="">Selecione</option>                
                      </select>
                    </div>
                  </div>                                      
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="pais_id" class="form-label">País:</label>
                      <select 
                        class="form-select" 
                        name="pais_id" 
                        id="pais_id" 
                      >
                        <option value="">Selecione</option>
                        @foreach ($countries as $item)
                          <option value="{{$item->id}}" {{$cliente->pais_id == $item->id ? 'selected' : ''}}>
                            {{$item->nome}}
                          </option>                
                        @endforeach            
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="cidade" class="form-label">Cidade no exterior:</label>
                      <select 
                        class="form-select" 
                        name="cidade_id"
                        id="cidade"
                      >
                        <option value="">Selecione</option>                
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-3">
                      <label for="rgFileCliente" class="form-label">RG:</label>
                      <input type="file" class="form-control" name="rg_file" id="rgFileCliente">
                    </div>
                    <div class="col-md-3">
                      <label for="passaporteFileCliente" class="form-label">Passaporte:</label>
                      <input type="file" class="form-control" name="passaporte_file" id="passaporteFileCliente">
                    </div>
                    <div class="col-md-3">
                      <label for="cnhFileCliente" class="form-label">CNH:</label>
                      <input type="file" class="form-control" name="cnh_file" id="cnhFileCliente">
                    </div>
                    <div class="col-md-3">
                      <label for="enderecoFileCliente" class="form-label">RG:</label>
                      <input type="file" class="form-control" name="endereco_file" id="enderecoFileCliente">
                    </div>
                  </div>   
                </div>
            </section>
          </div>                                  
      </form>
      
      {{-- Service Form --}}           
      <form action="{{route('ordens.update', $ordem[0])}}" method="POST" id="orderUpdate" class="formUpdate">
        @csrf
        @method('PATCH')
        {{-- Hidden inputs --}}
        <input 
        type="hidden"
        name="cliente_id"
        value="{{$cliente->id}}"
      >
        <div class="col-10 col-xl-8 mx-auto mb-5">
          <section title="Dados da OS" class="card shadow">
            <h5 class="card-header">Dados da Ordem de Serviço</h5>
              <div class="card-body">
                <div class="row mb-3 mx-auto">
                  <div class="col-md-6">
                    <label for="tipoServico" class="form-label">Tipo de Serviço:</label>
                    <select 
                      class="form-select" 
                      name="tiposervico_id" 
                      id="tipoServico" 
                    >
                        <option value="">Selecione</option>
                        @foreach ($demandas as $item)
                       
                          <option 
                            value="{{$item->id}}"{{$cliente->ordens[0]->tipoServico->id == $item->id ? 'selected' : ''}}
                          >
                            {{$item->nome}}
                          </option>                                                                                                                                   
                        @endforeach                       
                    </select>
                  </div>
                  <div class="col-md-6">
                    <div class="d-flex justify-content-between">
                      <label for="fornecedor" class="form-label">Fornecedor:</label>
                      <a 
                        class="btn btn-sm btn-outline-dark" 
                        id="select-provider-button"
                        title="Selecionar fornecedor"                        
                      >
                        Selecionar
                      </a>
                    </div>
                    <div class="d-none">
                      <input 
                        id="providerInput"
                        class="form-control" 
                        type="text" 
                        name="fornecedor_id" 
                        disabled
                        
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
                <div class="row mb-3 d-none">
                  <div class="col-md-6">
                    <label for="dataInicio" class="form-label">Data Início:</label>
                    @if ($ordem[0]->data_inicio)
                      <input 
                        type="date" 
                        class="form-control" 
                        name="data_inicio" 
                        id="dataInicio"
                        value="{{$ordem[0]->data_inicio}}"
                      >
                    @else
                      <input 
                        type="date" 
                        class="form-control" 
                        name="data_inicio" 
                        id="dataInicio"
                        value="{{$today}}"
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
                <div class="row mb-3 mx-auto">
                  <div class="col-md-4">
                    <label class="form-label" for="receita">Receita:</label>
                    <input class="form-control" type="number" step="0.01" name="receita" value="{{$ordem[0]->receita ?? old('receita')}}">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="custo">Custo:</label>
                    <input class="form-control" type="number" step="0.01" name="custo" value="{{$ordem[0]->custo ?? old('custo')}}">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="cotacao">Cotação Moeda:</label>
                    <input class="form-control" type="number" step="0.01" name="cotacao" value="{{$ordem[0]->cotacao ?? old('cotacao')}}">
                  </div>
                </div>   
                <div class="row mb-3 mx-auto">
                  <div class="col-md-12">
                    <label for="comentario" class="form-label">Comentários</label>
                    <textarea name="comentario" class="form-control"></textarea>                    
                  </div>  
                </div>                                                                                                                                                                                                                         
              </div>
          </section>
        </div>         
      </form>  
      <div class="text-center">
        <a title="Voltar para Home" id="cancelButton" class="btn btn-outline-secondary me-2" href="{{route('home')}}">Cancelar</a>
        <button title="Salvar dados da Ordem de Serviço" id="submitButton" class="btn btn-outline-secondary">Salvar</button>
      </div>
    </main>

    @include('admin.fornecedor.index')

    {{-- Modal to create OS --}}
    @include('admin.ordem.modal.create')

    {{-- Modal to create occupations --}}
    @include('apoio.occupation.modal.create')

    {{-- Create provider modal --}}
    @include('admin.fornecedor.modal.create')

    {{-- Alert errors provider modal --}}
    @include('admin.fornecedor.modal.alert')

    {{-- ============================================================ --}}
    
    {{-- creates dropdown of cities linked to state and country --}}
    <script type="text/javascript" src="{{asset('js/ordem/create/dropdownCities.js')}}"></script> 
    
    {{-- Create new occupation and feed it dropdown --}}
    <script type="text/javascript" src="{{asset('js/ordem/create/occupation.js')}}"></script>

    {{-- Send both forms at the same time --}}
    <script type="text/javascript" src="{{asset('js/ordem/create/sendForms.js')}}"></script>

    {{-- Manage providers forms --}}
    <script type="text/javascript" src="{{asset('js/fornecedor/index/manageProvider.js')}}"></script>

@endsection