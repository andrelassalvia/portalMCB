@extends('layouts.base')

@section('content')
    <main title="Ordem de Servico">

      {{-- Formulario Dados Cliente --}}
      <form action="" method="post">
        @csrf        
          <div class="col-10 col-xl-8 mx-auto mb-5">
            <section title="Dados do cliente" class="card shadow">
              <h5 class="card-header">Dados do Cliente</h5>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <input 
                        type="hidden"
                        data-id="{{$cliente->id}}"
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
                      <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
                      <input 
                        type="date" 
                        class="form-control"                         
                        name="data_nascimento" 
                        id="dataNascimento"
                        value="{{$cliente->data_nascimento ?? old('data_nascimento')}}"
                      >
                    </div>
                  </div> 
                  <div class="row mb-3">
                    <div class="col-12 d-md-flex">
                      <div class="form-check d-flex d-md-block col-2 align-items-center">
                        @if ($cliente->firma_aberta == 1)
                          <input type="checkbox" checked id="firma_aberta">
                        @else
                          <input type="hidden" name="firma_aberta" value="0" id="firma_aberta">
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
                          <input type="checkbox" checked id="cnh">
                        @else
                          <input type="hidden" name="cnh" value="0">
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
                          <input type="checkbox" checked id="cpf">    
                        @else
                          <input type="hidden" name="cpf" value="0">
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
                          <input type="checkbox" checked id="certificacao_digital">    
                        @else
                          <input type="hidden" name="certificacao_digital" value="0">
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
                        <input type="hidden" name="rg" value="0">
                        <input 
                          class="form-check-input" 
                          type="checkbox" 
                          name="rg" 
                          value="1" {{old('rg') == 1 ? 'checked' : ''}}
                          id="rg"
                        >
                        <label class="form-check-label" for="rg">
                          RG
                        </label>
                      </div>
                      <div class="form-check col-2">
                        <input type="hidden" name="passaporte" value="0">
                        <input 
                          class="form-check-input" 
                          type="checkbox" 
                          name="passaporte" 
                          value="1" {{old('passaporte') == 1 ? 'checked' : ''}}
                          id="passaporte"
                      >
                        <label class="form-check-label" for="passaporte">
                          Passaporte
                        </label>
                      </div>
                    </div>
                    
                  </div>                                                                                                   
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="estado_brasil" class="form-label">Estado</label>
                      <select 
                        class="form-select" 
                        name="estado_brasil" 
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
                      <label for="cidade_brasil" class="form-label">Cidade</label>
                      <select 
                        class="form-select" 
                        name="cidade_brasil"
                        id="cidade_brasil"
                      >
                        <option value="">Selecione</option>                
                      </select>
                    </div>
                  </div>                                      
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="pais_id" class="form-label">País</label>
                      <select 
                        class="form-select" 
                        name="pais_id" 
                        id="pais_id" 
                      >
                        <option value="">Selecione</option>
                        @foreach ($countries as $item)
                          <option value="{{$item->id}}">{{$item->nome}}</option>                
                        @endforeach            
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="cidade" class="form-label">Cidade no exterior</label>
                      <select 
                        class="form-select" 
                        name="cidade"
                        id="cidade"
                      >
                        <option value="">Selecione</option>                
                      </select>
                    </div>
                  </div>
                  <div class="row">
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

      {{-- Formulario Dados OS --}}
      <form action="" method="post">
        @csrf
        <input type="hidden" name="">
        <div class="col-10 col-xl-8 mx-auto mb-5">
          <section title="Dados da OS" class="card shadow">
            <h5 class="card-header">Dados da Ordem de Serviço</h5>
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="tipoServico" class="form-label">Tipo de Serviço:</label>
                    <select 
                      class="form-select" 
                      name="tiposervico_id" 
                      id="tipoServico" 
                    >
                      <option value="">Selecione</option>
                      @foreach ($states as $item)
                        <option value=""></option>                
                      @endforeach            
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="fornecedor" class="form-label">Fornecedor:</label>
                    <select 
                      class="form-select" 
                      name="fornecedor_id" 
                      id="fornecedor" 
                    >
                      <option value="">Selecione</option>
                      @foreach ($states as $item)
                        <option value=""></option>                
                      @endforeach            
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="dataInicio" class="form-label">Data Início:</label>
                    <input type="date" class="form-control" name="data_inicio" id="dataInicio">
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
                    <label class="form-label" for="">Receita:</label>
                    <input class="form-control" type="number" step="0.01">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="">Custo:</label>
                    <input class="form-control" type="number" step="0.01">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="">Cotação Moeda:</label>
                    <input class="form-control" type="number" step="0.01">
                  </div>
                </div>                                                                                                                                                                                                                            
              </div>
          </section>
        </div>         
      </form>  
      <div class="text-center">
        <button type="submit" class="btn btn-outline-secondary">Salvar</button>
      </div>
    </main>

    {{-- ============================================================ --}}


  <script type="text/javascript">
    $(document).ready(function(){
      var estadoCadastrado = $('#estado_brasil').val();
      var idCadastrado = $(this).find('input[data-id]').data('id');        
      if (typeof estadoCadastrado != undefined) {

        var urlsCards = [
          'http://localhost:8000/clientes/cards/', 
          'http://192.168.1.85:8000/clientes/cards/'
        ];

        var urlsCidadesBrasil = [
          'http://localhost:8000/cidadesBrasil/',
          'http://192.168.1.85:8000/cidadesBrasil/'
        ];

        var urlsLoadCidades = [
          'http://192.168.1.85:8000/clientes/load_cidades/',
          'http://localhost:8000/clientes/load_cidades/'
        ];

        var urlsLoadCities = [
          'http://localhost:8000/clientes/load_cities/',
          'http://192.168.1.85:8000/clientes/load_cities/'
        ];
                        
        // AJAX
        $.each(urlsCards, function(i, u){
          $.ajax(u+idCadastrado,
          {          
            type:'get',
            dataType:'json',
            success: function(response){
              if(response.cidadebrasil_id != null){
                var cidadebrasilId = response.cidadebrasil_id;
                
                $.each(urlsCidadesBrasil, function(i, u){
                  $.ajax(u+cidadebrasilId,
                  {
                  // url:"http://localhost:8000/cidadesBrasil/"+cidadebrasilId,
                    type:'get',
                    dataType:'json',
                    success: function(response){
                      // empty dropdown
                      $('#cidade_brasil').find('option').remove();
                      var cidadebrasilNome = response.nome;
                      var option = "<option value='"+cidadebrasilId+"'>"+cidadebrasilNome+"</option>"
                      $('#cidade_brasil').append(option);
                    }
                  }); 
                });                          
              }            
            }
          });
        });        
      } 
      
      $('#estado_brasil').change(function(){
        var estado = $(this).val(); 
        
        // empty the dropdown
        $('#cidade_brasil').find("option").not(':first').remove();

        // AJAX 
        $.each(urlsLoadCidades, function(i, u){
          $.ajax(u+estado,
          {          
            type: "get",
            dataType: "json",
            success: function(response){            
              var len = 0;
              if(response !=null){
                len = response.length;
              }
              if(len>0){
                for (let i = 0; i < len; i++) {
                  var id = response[i].id;
                  var name = response[i].nome;
                  var option = "<option value='"+id+"'>"+name+"</option>";

                  $('#cidade_brasil').append(option);
                }
              }
            }
          });
        });                
      });

      $('#pais_id').change(function(){
        var country = $(this).val();

        // empty dropdown
        $('#cidade').find('option').not(':first').remove();

        // AJAX
        $.each(urlsLoadCities, function(i, u){
          $.ajax(u+country,
          {            
            type:"get",
            dataType:"json",
            success: function(response){
              var len = 0;
              if(response !=null){
                len = response.length;
              }
              if(len>0){
                for (let i = 0; i < len; i++) {
                  var id = response[i].id;
                  var name = response[i].nome;
                  var option = "<option value='"+id+"'>"+name+"</option>";
                  $('#cidade').append(option);                
                }
              }
            }
          });
        });
      });
    });
  </script> 
@endsection