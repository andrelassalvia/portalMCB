@extends('layouts.base')

@section('content')
    
<section>
  <form action="{{route('ordens.store')}}" method="post">
    @csrf
    
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
    {{-- {{dd($provider)}} --}}
    <div class="col-10 col-xl-8 mx-auto mb-4 mt-5">
      <div class="card shadow" title="Dados da OS">
        <h5 class="card-header">Dados da Ordem de Serviço</h5>
        <div class="card-body">
          <div class="row mb-3 mx-auto">
  
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
                @if ($provider == null)
                  <input 
                    type="hidden"
                    name="fornecedor_id"
                    value="{{$provider->id ?? ""}}"
                  >
                  <input 
                    type="text"
                    class="form-control"
                    id="providerName"
                  >
                @else
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
                @endif
              </div>
            </div>
  
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
                />
              </x-select.select-and-label>
              @if ($errors->has('tiposervico_id'))
                <p class="errorMessages">{{$errors->first('tiposervico_id')}}</p>
              @endif
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
      </div>
    </div>

    {{-- BUTTONS --}}
    <div class="col-10 col-xl-8 mb-4 mx-auto d-flex justify-content-between">
      <a class="btn btn-mcb" href="{{Session::get('clientShowUrl')}}">Voltar</a>
      <button class="btn btn-mcb" type="submit">Salvar</button>
    </div>

  </form>
</section>

@endsection