{{-- BASIC FORM FOR CLIENT DATA --}}
<div class="p-2 border-1 shadow">

  {{-- Input Nome --}}
  @if (isset($cliente))
  <div class="mb-3">
    <x-input.input-and-label
      title="Nome:"
      :id="'nome'"
      type="text"
      name="nome"
      :value="$cliente->nome"
      req="*"
    />
    @if ($errors->has('nome'))
        <p class="errorMessages">{{$errors->first('nome')}}</p>
    @endif
  </div>
  
  {{-- Input Telefone --}}
  <div class="mb-3">
    <x-input.input-and-label
      title="Telefone:"
      :id="'telefone'"
      type="text"
      name="telefone"
      :value="$cliente->telefone"
      req="*"
    />
    @if ($errors->has('telefone'))
        <p class="errorMessages">{{$errors->first('telefone')}}</p>
    @endif
  </div>
  @else
  <div class="mb-3">
    <x-input.input-and-label-and-old
      title="Nome:"
      :id="'nome'"
      type="text"
      name="nome"
      req="*"
    />
    @if ($errors->has('nome'))
        <p class="errorMessages">{{$errors->first('nome')}}</p>
    @endif
  </div>
  
  {{-- Input Telefone --}}
  <div class="mb-3">
    <x-input.input-and-label
      title="Telefone:"
      :id="'telefone'"
      type="text"
      name="telefone"
      :value="$tel"
      req="*"
    />
    @if ($errors->has('telefone'))
        <p class="errorMessages">{{$errors->first('telefone')}}</p>
    @endif
  </div>
  @endif

  {{-- Select Demanda --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Demanda:"
      name="tiposervico_id"
      :id="'tipo_servico'"
      req="*"
    >
      <option value="">Selecione</option>
      @if (isset($ordem))
        <x-select.option-foreach-and-isset
          :object="$ordem"
          :arr="$services"
          value="id"
          foreignId="tiposervico_id"
          column="nome"
        />
      @else
        <x-select.option-and-foreach
          :arr="$services"
          value="id"
          column="nome"
        />
      @endif
    </x-select.select-and-label>
    @if ($errors->has('tiposervico_id'))
        <p class="errorMessages">{{$errors->first('tiposervico_id')}}</p>
    @endif
  </div>  

  {{-- Select Estado --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Estado:"
      name="estadobrasil_id"
      :id="'estado_brasil'"
      req=""
    >
      <option value="">Selecione</option>
      {{-- Case this client has a state registred --}}
      @if (isset($estado))
        {{-- there is a logic to retrieve the saved state --}}
        <x-select.option-foreach-and-isset
          :object="$cliente"
          :arr="$states"
          value="id"
          foreignId="estadobrasil_id"
          column="nome"
        />
      @else
      {{-- case this client hasn't a state registred, list all --}}
        <x-select.option-and-foreach
          :arr="$states" {{-- list all states in Brazil --}}
          value="id"
          column="nome"
        />
      @endif
    </x-select.select-and-label>
    @if ($errors->has('estadobrasil_id'))
        <p class="errorMessages">{{$errors->first('estadobrasil_id')}}</p>
    @endif
  </div>

  {{-- Select Cidade --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Cidade:"
      name="cidadebrasil_id"
      :id="'cidade_brasil'"
      req=""
    >
      <option value="">Selecione</option>
      @if (isset($cidade))
        <x-select.option-foreach-and-isset
          :object="$cliente"
          :arr="$cidades"
          value="id"
          foreignId="cidadebrasil_id"
          column="nome"
        />
      @else
        <x-select.option-and-foreach
          :arr="$cidades"
          value="id"
          column="nome"
        />
      @endif
    </x-select.select-and-label>
    @if ($errors->has('cidadebrasil_id'))
        <p class="errorMessages">{{$errors->first('cidadebrasil_id')}}</p>
    @endif
  </div>  
  
  {{-- CHECKS RADIOS --}}
  <label for="" class="form-label">Documentos:</label>
  <div class="d-flex mb-3 justify-content-between">

    {{-- Input Firma aberta --}}
    @if (isset($cliente))
    <div class="form-check me-3">                      
      <x-input.check-and-label
        title="Firma Aberta"
        name="firma_aberta"
        :id="'firma_aberta'"
        :obj="$cliente"        
      />                                             
    </div>

    {{-- Input CNH --}}
    <div class="form-check me-3">                      
      <x-input.check-and-label
        title="CNH"
        name="cnh"
        :id="'cnh'"
        :obj="$cliente"
      />
    </div>

    {{-- INput CPF --}}
    <div class="form-check me-3">
      <x-input.check-and-label
        title="CPF"
        name="cpf"
        :id="'cpf'"
        :obj="$cliente"
      />
    </div>

    {{-- Input Certificacao Digital --}}
    <div class="form-check">
      <x-input.check-and-label
        title="Certificação Digital"
        name="certificacao_digital"
        :id="'certificacao_digital'"
        :obj="$cliente"
      />
    </div>
    @else
    <div class="form-check me-3">                      
      <x-input.check-and-label
        title="Firma Aberta"
        name="firma_aberta"
        :id="'firma_aberta'"
        obj=""        
      />                                             
    </div>

    {{-- Input CNH --}}
    <div class="form-check me-3">                      
      <x-input.check-and-label
        title="CNH"
        name="cnh"
        :id="'cnh'"
        obj=""
      />
    </div>

    {{-- INput CPF --}}
    <div class="form-check me-3">
      <x-input.check-and-label
        title="CPF"
        name="cpf"
        :id="'cpf'"
        obj=""
      />
    </div>

    {{-- Input Certificacao Digital --}}
    <div class="form-check">
      <x-input.check-and-label
        title="Certificação Digital"
        name="certificacao_digital"
        :id="'certificacao_digital'"
        obj=""
      />
    </div>
  @endif
  </div>  

  {{-- Input Cooment --}}
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Comentário:</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Inserir comentário" name="comentario"></textarea>
  </div>                                   
</div>