@extends('layouts.base')

@section('content')

  <main>    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-3 ps-xl-4">
          @if (isset($errors) && count($errors)>0)
              <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
              </div>
          @endif
          <section class="customer-details">
            <header>
              <h3>Detalhes do Cliente</h2>
            </header>
            <form action="{{route('clientes.store')}}" method="post">
              @csrf
                <div class="p-2 border-1 shadow">
                  <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input 
                      type="text" 
                      class="form-control" 
                      id="nome" 
                      name="nome"
                      value="{{old('nome')}}"
                    >
                  </div>
                  <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input 
                      type="text" 
                      class="form-control" 
                      id="telefone" 
                      name="telefone"
                      value="{{old('telefone')}}"
                      >
                  </div>
                  <div class="mb-3">
                    <label for="tipo_servico" class="form-label">Demanda</label>
                    <select
                      class="form-select"
                      name="tipo_servico"
                      id="tipo_servico"
                    >
                    <option value="">Selecione</option>
                    @foreach ($services as $item)
                        <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
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
                  <div class="mb-3">
                    <label for="cidade_brasil" class="form-label">Cidade</label>
                    <select 
                      class="form-select" 
                      name="cidade_brasil"
                      id="cidade_brasil"
                    >
                      <option value="">Selecione</option>                
                    </select>
                  </div>      
                  <div class="d-flex mb-3">
                    <div class="form-check me-3">
                      <input type="hidden" name="firma_aberta" value="0">
                      <input class="form-check-input" type="checkbox" name="firma_aberta" value="1" id="firma_aberta">
                      <label class="form-check-label" for="firma_aberta">
                        Firma aberta
                      </label>
                    </div>
                    <div class="form-check me-3">
                      <input type="hidden" name="cnh" value="0">
                      <input class="form-check-input" type="checkbox" name="cnh" value="1" id="cnh">
                      <label class="form-check-label" for="cnh">
                        CNH
                      </label>
                    </div>
                    <div class="form-check">
                      <input type="hidden" name="cpf" value="0">
                      <input class="form-check-input" type="checkbox" name="cpf" value="1" id="cpf">
                      <label class="form-check-label" for="cpf">
                        CPF
                      </label>
                    </div>
                  </div>  
                  <div class="form-floating">
                    <textarea                       
                      class="form-control" 
                      id="comentario" 
                      name="comentario"
                      value="{{old('comentario')}}"
                    ></textarea>
                    <label for="comentario">Comentários</label>
                  </div>                      
                </div> 
                <div class="row d-flex justify-content-center mt-3">        
                  <button type="submit" class="col-2 btn btn-outline-secondary">Save</button>       
              </div>         
            </form>    
          </section>                  
        </div>
        <aside class="col-lg-4 home-quick-links p-3 pe-lg-4 pe-xl-5">
          <header>
            <h3>Quick Links</h3>
          </header>
          <div>
            <ul>
              <li><a href="{{route('clientes.create')}}">Cadastro Clientes</a></li>
              <li><a href="">Cadastro Fornecedores</a></li>
              <li><a href="">Cadastro Serviços</a></li>
              <li><a href="">Cadastro Ordens de Serviço</a></li>              
            </ul>
          </div>
        </aside>                            
      </div>      
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
   });
 </script> 
@endsection