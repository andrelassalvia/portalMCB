@extends('layouts.base')

@section('content')
    <div class="mt-4">
      <form action="{{route('ordens.store')}}" method="post">
        @csrf
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
        <input 
            type="hidden"
            name="cliente_id"
            value="{{$clienteId}}"
        >
        <section class="col-10 col-xl-8 mx-auto mb-4 mt-5">
          <div class="card shadow" title="Dados da OS">
            <h5 class="card-header">Dados da Ordem de Serviço</h5>
            <div class="card-body">
              <div class="row mb-3 mx-auto">

                {{-- Demand Select --}}
                <div class="col-md-6">
                  <x-select.select-and-label
                    name="tiposervico_id"
                    title="Tipo de Serviço:"
                    :id="'tipoServico'"
                    req="*"
                  >
                  <option value="">Selecione</option>
                  <x-select.option-and-foreach
                    :arr="$demandas"
                    value="id"
                    column="nome"
                    name="tiposervico_id"
                  />
                  </x-select.select-and-label>
                  @if ($errors->has('tiposervico_id'))
                    <p class="errorMessages">{{$errors->first('tiposervico_id')}}</p>
                  @endif
                </div>

                {{-- Fornecedor Input --}}
                <div class="col-md-6">
                  <div class="d-flex justify-content-between">
                    <label for="fornecedor" class="form-label">Fornecedor:</label>
                    <a 
                      href="{{route('fornecedores.index')}}"
                      class="btn btn-sm btn-mcb"
                      id="select-provider-button"
                      title="Selecionar fornecedor"
                    >
                      Selecionar
                    </a>
                  </div>
                  <div>
                    <input 
                      type="hidden"
                      name="fornecedor_id"
                      value="{{$provider->id ?? ""}}"
                    >
                    <input 
                      type="text"
                      class="form-control"
                      id="providerName"
                      value="{{$provider->nome ?? ""}}"
                    >
                  </div>
                </div>
                

              </div>
            </div>
          </div>
        </section>
      </form>
    </div>

@endsection