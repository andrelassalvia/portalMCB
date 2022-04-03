@extends('layouts.base')

@section('content')
    <main title="Ordem de Servico">
      <form action="" method="post">
        @csrf        
          <div class="col-10 col-xl-8 mx-auto mb-5">
            <section title="Dados do cliente" class="card shadow">
              <h5 class="card-header">Dados do Cliente</h5>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="nomeCliente" class="form-label">Nome:</label>
                      <input type="text" class="form-control" name="nome" id="nomeCliente">
                    </div>
                    <div class="col-md-6">
                      <label for="telefoneCliente" class="form-label">Telefone:</label>
                      <input 
                        type="text" 
                        class="form-control" 
                        placeholder="(+xx)0xxx-xxx-xxx" 
                        name="telefone" 
                        id="telefoneCliente"
                      >
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="emailCliente" class="form-label">Email:</label>
                      <input type="email" class="form-control" name="email" id="emailCliente">
                    </div>
                    <div class="col-md-6">
                      <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
                      <input 
                        type="date" 
                        class="form-control"                         
                        name="data_nascimento" 
                        id="dataNascimento"
                      >
                    </div>
                  </div> 
                  <div class="row mb-3 mx-auto">
                    <div class="form-check me-3 col-2">
                      <input type="hidden" name="firma_aberta" value="0">
                      <input class="form-check-input" type="checkbox" name="firma_aberta" value="1" id="firma_aberta">
                      <label class="form-check-label" for="firma_aberta">
                        Firma aberta
                      </label>
                    </div>
                    <div class="form-check me-3 col-2">
                      <input type="hidden" name="cnh" value="0">
                      <input class="form-check-input" type="checkbox" name="cnh" value="1" id="cnh">
                      <label class="form-check-label" for="cnh">
                        CNH
                      </label>
                    </div>
                    <div class="form-check me-2 col-2">
                      <input type="hidden" name="cpf" value="0">
                      <input class="form-check-input" type="checkbox" name="cpf" value="1" id="cpf">
                      <label class="form-check-label" for="cpf">
                        CPF
                      </label>
                    </div>
                    <div class="form-check me-2 col-2">
                      <input type="hidden" name="rg" value="0">
                      <input class="form-check-input" type="checkbox" name="rg" value="1" id="rg">
                      <label class="form-check-label" for="rg">
                        RG
                      </label>
                    </div>
                    <div class="form-check me-2 col-2">
                      <input type="hidden" name="passaporte" value="0">
                      <input class="form-check-input" type="checkbox" name="passaporte" value="1" id="passaporte">
                      <label class="form-check-label" for="passaporte">
                        Passaporte
                      </label>
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
                        @foreach ($states as $item)
                          <option value="{{$item->id}}">{{$item->nome}}</option>                
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
  <script type="text/javascript">
    $(document).ready(function(){
      
      $('#estado_brasil').change(function(){
        var estado = $(this).val(); 
        
        // empty the dropdown
        $('#cidade_brasil').find("option").not(':first').remove();

        // AJAX 
        $.ajax({
          url: "http://192.168.1.85:8000/clientes/load_cidades/"+estado,
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
        $.ajax({
          url: "http://localhost:8000/clientes/load_cidades/"+estado,
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

      $('#pais_id').change(function(){
        var country = $(this).val();

        // empty dropdown
        $('#cidade').find('option').not(':first').remove();

        // AJAX
        $.ajax({
          url:"http://localhost:8000/clientes/load_cities/"+country,
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
  </script> 
@endsection