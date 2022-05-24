{{-- BASIC FORM FOR CLIENT DATA --}}
<div class="p-2 border-1 shadow">

  {{-- Input Nome --}}
  <div class="mb-3">
    <x-input.input-and-label
      title="Nome:"
      :id="'nome'"
      type="text"
      name="nome"
      :value="$cliente->nome"
    />
  </div>

  {{-- Input Telefone --}}
  <div class="mb-3">
    <x-input.input-and-label
      title="Telefone:"
      :id="'telefone'"
      type="text"
      name="telefone"
      :value="$cliente->telefone"
    />
  </div>

  {{-- Select Demanda --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Demanda:"
      name="tiposervico_id"
      :id="'tipo_servico'"
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
  </div>  

  {{-- Select Estado --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Estado:"
      name="estadobrasil_id"
      :id="'estado_brasil'"
    >
      <option value="">Selecione</option>
      @if (isset($estado))
        <x-select.option-foreach-and-isset
          :object="$cliente"
          :arr="$states"
          value="id"
          foreignId="estadobrasil_id"
          column="nome"
        />
      @else
        <x-select.option-and-foreach
          :arr="$states"
          value="id"
          column="nome"
        />
      @endif
    </x-select.select-and-label>
  </div>

  {{-- Select Cidade --}}
  <div class="mb-3">
    <x-select.select-and-label
      title="Cidade:"
      name="cidadebrasil_id"
      :id="'cidade_brasil'"
    >
      <option value="">Selecione</option>
      @if (isset($cidade))
        <x-select.option-foreach-and-isset
          :object="$cliente"
          :arr="$cities"
          value="id"
          foreignId="cidadebrasil_id"
          column="nome"
        />
      @else
        <x-select.option-and-foreach
          :arr="$cities"
          value="id"
          column="nome"
        />
      @endif
    </x-select.select-and-label>
  </div>  
  
  {{-- CHECKS RADIOS --}}
  <div class="d-flex mb-3 justify-content-between">

    {{-- Input Firma aberta --}}
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
  </div>                                     
</div>