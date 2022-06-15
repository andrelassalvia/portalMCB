<div class="p-2 border-1 shadow">

  {{-- bind a new provider to an order --}}
  @isset($ordem)
      <input
        type="hidden"
        name="ordem"
        value="{{$ordem}}"
      >
  @endisset

  {{-- FORM TO EDIT PROVIDER --}}
  @if (isset($fornecedor))
    {{-- Nome Cartorio --}}
    <div class="mb-3">
      <x-input.input-and-label
        :id="'providerName'"
        title="Nome Cartório:"
        type="text"
        name="nome"
        :value="$fornecedor->nome"
        req=""
      />
      @if ($errors->has('nome'))
          <p class="errorMessages">{{$errors->first('nome')}}</p>
      @endif
    </div>  

    {{-- Nome Contato --}}
    <div class="mb-3">
      <x-input.input-and-label
        :id="'providerContato'"
        title="Nome Contato:"
        type="text"
        name="nome_contato"
        :value="$fornecedor->nome_contato"
        req=""
      />
      @if ($errors->has('nome_contato'))
        <p class="errorMessages">{{$errors->first('nome_contato')}}</p>
      @endif
    </div>

    {{-- Telefone --}}
    <div class="mb-3">
      <x-input.input-and-label
        :id="'providerTelefone'"
        title="Telefone:"
        type="text"
        name="telefone"
        :value="$fornecedor->telefone"
        req="*"
      />
      @if ($errors->has('telefone'))
        <p class="errorMessages">{{$errors->first('telefone')}}</p>
      @endif
    </div>

    {{-- WhatsApp --}}
    <div class="mb-3">
      <x-input.input-and-label
        :id="'providerZap'"
        title="Zap:"
        type="text"
        name="zap"
        :value="$fornecedor->zap"
        req=""
      />
      @if ($errors->has('zap'))
        <p class="errorMessages">{{$errors->first('zap')}}</p>
      @endif
    </div>
    {{-- Email --}}
    <div class="mb-3">
      <x-input.input-and-label
        :id="'providerEmail'"
        title="Email:"
        type="email"
        name="email"
        :value="$fornecedor->email"
        req=""
      />
      @if ($errors->has('email'))
        <p class="errorMessages">{{$errors->first('email')}}</p>
      @endif
    </div>

    {{-- Estado --}}
    <div class="mb-3">
      <x-select.select-and-label
        title="Estado:"
        name="estadobrasil_id"
        :id="'estado_brasil'"
        req="*"
      >
        <option value="">Selecione</option>
        <x-select.option-foreach-and-isset
          :object="$fornecedor"
          :arr="$estados"
          value="id"
          foreignId="estadobrasil_id"
          column="nome"
        />
      </x-select.select-and-label>
      @if ($errors->has('estadobrasil_id'))
        <p class="errorMessages">{{$errors->first('estadobrasil_id')}}</p>
      @endif
    </div>

    {{-- Cidade --}}
    <div class="mb-3">
      <x-select.select-and-label
        title="Cidade:"
        name="cidadebrasil_id"
        :id="'cidade_brasil'"
        req="*"
      >
        <option value="">Selecione</option>
        <x-select.option-foreach-and-isset
          :object="$fornecedor"
          :arr="$cidades"
          value="id"
          foreignId="cidadebrasil_id"
          column="nome"
        />
      </x-select.select-and-label>
      @if ($errors->has('cidadebrasil_id'))
        <p class="errorMessages">{{$errors->first('cidadebrasil_id')}}</p>
      @endif
    </div>
  
    {{-- FORM TO CREATE PROVIDER --}}
  @else
    {{-- Nome Cartorio --}}
    <div class="mb-3">
      <x-input.input-label-and-old
        :id="'providerName'"
        title="Nome Cartório:"
        type="text"
        name="nome"
        req=""
      />
      @if ($errors->has('nome'))
          <p class="errorMessages">{{$errors->first('nome')}}</p>
      @endif
    </div>

    {{-- Nome Contato --}}
    <div class="mb-3">
      <x-input.input-label-and-old
        :id="'providerContato'"
        title="Nome Contato:"
        type="text"
        name="nome_contato"
        req=""
      />
      @if ($errors->has('nome_contato'))
        <p class="errorMessages">{{$errors->first('nome_contato')}}</p>
      @endif
    </div>

    {{-- Telefone --}}
    <div class="mb-3">
      <x-input.input-label-and-old
        :id="'providerTelefone'"
        title="Telefone:"
        type="text"
        name="telefone"
        req="*"
      />
      @if ($errors->has('telefone'))
        <p class="errorMessages">{{$errors->first('telefone')}}</p>
      @endif
    </div>

    {{-- WhatsApp --}}
    <div class="mb-3">
      <x-input.input-label-and-old
        :id="'providerZap'"
        title="Zap:"
        type="text"
        name="zap"
        req=""
      />
      @if ($errors->has('zap'))
        <p class="errorMessages">{{$errors->first('zap')}}</p>
      @endif
    </div>

    {{-- Email --}}
    <div class="mb-3">
      <x-input.input-label-and-old
        :id="'providerEmail'"
        title="Email:"
        type="email"
        name="email"
        req=""
      />
      @if ($errors->has('email'))
        <p class="errorMessages">{{$errors->first('email')}}</p>
      @endif
    </div>

    {{-- Estado --}}
    <div class="mb-3">
      <x-select.select-and-label
        title="Estado:"
        name="estadobrasil_id"
        :id="'estado_brasil'"
        req="*"
      >
        <option value="">Selecione</option>
        <x-select.option-and-foreach
          :arr="$estados"
          :value="'id'"
          column="nome"
        />
      </x-select.select-and-label>
      @if ($errors->has('estadobrasil_id'))
        <p class="errorMessages">{{$errors->first('estadobrasil_id')}}</p>
      @endif
    </div>

    {{-- Cidade --}}
    <div class="mb-3">
      <x-select.select-and-label
        title="Cidade:"
        name="cidadebrasil_id"
        :id="'cidade_brasil'"
        req="*"
      >
        <option value="">Selecione</option>
        <x-select.option-and-foreach
          :arr="$cidades"
          :value="'id'"
          column="nome"
        />
      </x-select.select-and-label>
      @if ($errors->has('cidadebrasil_id'))
        <p class="errorMessages">{{$errors->first('cidadebrasil_id')}}</p>
      @endif
    </div>
  @endif
</div>
<div class="row d-flex justify-content-center mb-3 p-4">
  <a href="{{route('fornecedores.index')}}" class="col-2 btn btn-mcb me-2">Cancelar</a>  
  <button type="submit" class="col-2 btn btn-mcb" id="submitButton">Salvar</button>  
</div>
