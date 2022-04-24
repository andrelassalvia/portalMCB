@extends('layouts.base')

@section('content')

  <div class="container">
    <div class="row mb-md-3">
      <section title="Pesquisa" class="d-md-flex">
        {{-- Search Estate --}}
        <div class="col-md-4 px-2 mb-2">
          <label for="fornecedorIndexEstadoBrasil" class="form-label">Estado:</label>
          <select class="form-select" name="estadobrasil_id" id="fornecedorIndexEstadoBrasil"></select>
        </div>
        {{-- Search city--}}
        <div class="col-md-4 px-2 mb-2">
          <label class="form-label" for="fornecedorIndexCidadeBrasil">Cidade:</label>
          <select class="form-select" name="cidadebrasil_id" id="fornecedorIndexCidadeBrasil"></select>
        </div>
        {{-- Search by classification --}}
        <div class="col-md-4 px-2 mb-2">
          <label class="form-label" for="fornecedorIndexClassificacao">Classificação:</label>
          <select class="form-select" name="classificacao_id" id="fornecedorIndexClassificacao"></select>
        </div>
      </section>
    </div>
    <div class="row">      
      <section id="fornecedoresIndexLista" title="Lista de fornecedores">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Estado</th>
              <th scope="col">Cidade</th>
              <th scope="col">Classificação</th>
              <th scope="col">Contato</th>
              <th scope="col">Zap</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>              
              <th style="text-align: center">
                <a 
                  id="fornecedorIndexInsertButton"
                  class="btn btn-primary btn-sm"                   
                  title="Inserir novo fornecedor"
                >
                  Novo
                </a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($providers as $item)                    
                <tr>
                  <th>{{$item->nome}}</th>  
                  @if (isset($item->estadoBrasil->nome))
                    <td>{{$item->estadoBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>
                  @endif
                  @if (isset($item->cidadeBrasil->nome))
                    <td>{{$item->cidadeBrasil->nome}}</td>                            
                  @else
                    <td>N/I</td>
                  @endif                                 
                  @switch($item->classificacao_id)
                      @case(2)
                        <td class="one-star">★</td>                          
                        @break  
                      @case(3)
                        <td>★★</td>                   
                        @break
                      @case(4)
                        <td>★★★</td>
                        @break
                      @case(5)
                        <td>★★★★</td>
                        @break
                      @case(6)
                        <td class="five-stars">★★★★★</td>
                        @break
                      @default
                        <td>Sem classificação</td>                        
                  @endswitch
                  <td>{{$item->nome_contato}}</td>                  
                  <td>{{$item->zap}}</td>
                  <td>{{$item->telefone}}</td>
                  <td>{{$item->email}}</td>                                  
                </tr>
            @endforeach            
          </tbody>
        </table>
      </section>

      {{-- Create provider modal --}}
      @include('admin.fornecedor.modal.create')

      {{-- Alert errors provider modal --}}
      @include('admin.fornecedor.modal.alert')
    </div>
  </div>

  <script type="text/javascript" src="{{asset('js/fornecedor/index/manageProvider.js')}}"></script>
@endsection