@extends('layouts.base')

@section('content')

<div class="mt-4">
    <form action="{{route('ordensNew.update', $ordem->id)}}" method="post">
        @csrf
        @method('PATCH')
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
            value="{{$cliente->id}}"
        >
        <div class="col-10 col-xl-8 mx-auto mb-4 mt5">
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

                    {{-- VALORES --}}
                    <div class="row mb-3 mx-auto">

                        {{-- Receita Input --}}
                        <div class="col-md-4">
                            <label class="form-label" for="receita">Receita:</label>
                            <input 
                                class="form-control" 
                                type="number" 
                                step="0.01" 
                                name="receita" 
                                value="{{$ordem->receita ?? old('receita')}}"
                            >
                        </div>

                        {{-- Custo Input --}}
                        <div class="col-md-4">
                            <label class="form-label" for="custo">Custo:</label>
                            <input 
                                class="form-control" 
                                type="number" 
                                step="0.01" 
                                name="custo" 
                                value="{{$ordem->custo ?? old('custo')}}"
                            >
                        </div>

                        {{-- Cotacao Input --}}
                        <div class="col-md-4">
                            <label class="form-label" for="cotacao">Cotação da Libra:</label>
                            <input 
                                class="form-control" 
                                type="number" 
                                step="0.01" 
                                name="cotacao" 
                                value="{{$ordem->cotacao ?? old('cotacao')}}"
                            >
                        </div>
                    </div> 
                </div>
            </section>
        </div>
        <div class="col-10 col-xl-8 mx-auto mb-4 d-flex justify-content-between">
            <x-button.button-mcb
              route="clients.potential"
              params=""
              title="Cancelar"
            />
            <button class="btn btn-mcb" type="submit">Salvar</button>
        </div>
    </form>
</div>
@endsection