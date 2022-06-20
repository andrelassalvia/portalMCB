<section title="Dados do cliente" class="card shadow">
  <h5 class="card-header">Dados do Cliente</h5>
  <div class="card-body">
    <div class="row mb-3">
      <div class="col-md-6">

        {{-- Client name --}}
        <x-input.input-and-label
          id="nomeCliente"
          title="Nome:"
          type="text"
          name="nome"
          :value="$cliente->nome"
          req="*"
        />
        @if ($errors->has('nome'))
            <p class="errorMessages">{{$errors->first('nome')}}</p>
        @endif
      </div>

      {{-- Client telefone --}}
      <div class="col-md-6">
        <x-input.input-and-label
          id="telefoneCliente"
          title="Telefone:"
          type="text"
          name="telefone"
          :value="$cliente->telefone"
          req="*"
        />
        @if ($errors->has('telefone'))
            <p class="errorMessages">{{$errors->first('telefone')}}</p>
        @endif
      </div>
    </div>

    <div class="row mb-3">

      {{-- Client occupation --}}
      <div class="col-md-6">
        <label for="occupation" class="form-label">Ocupação:</label>
        <div class="d-flex">
          <select name="occupation_id" id="occupation" class="form-select me-2">
            <option value="">Selecione</option>
            @foreach ($occupations as $occupation)
              <option 
                value="{{$occupation->id}}" {{$occupation->id == $cliente->occupation_id ? 'selected' : ''}}
              >
                {{$occupation->nome}}
              </option>
            @endforeach
          </select>
          <a 
            type="button"
            id="plusButton" 
            title="Incluir ocupação"
            href="#"
          >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
            </svg>
          </a> 
        </div>
        @if ($errors->has('occupation_id'))
            <p class="errorMessages">{{$errors->first('occupation_id')}}</p>
        @endif
      </div>

      {{-- Cliente email --}}
      <div class="col-md-6">
        <x-input.input-and-label
          id="emailCliente"
          title="Email:"
          type="email"
          name="email"
          :value="$cliente->email"
          req=""
        />
        @if ($errors->has('email'))
            <p class="errorMessages">{{$errors->first('email')}}</p>
        @endif
      </div>
    </div>
    <div class="row mb-3">

      {{-- Birth Date --}}
      <div class="col-md-6">
        <x-input.input-and-label
          id="dataNascimento"
          title="Data de Nascimento:"
          type="date"
          name="data_nascimento"
          :value="$cliente->data_nascimento"
          req=""
        />
        @if ($errors->has('data_nascimento'))
            <p class="errorMessages">{{$errors->first('data_nascimento')}}</p>
        @endif
      </div>

      {{-- Marital status --}}
      <div class="col-md-6">
        <x-select.select-and-label
          name="maritalstatus_id"
          title="Estado Civil:"
          :id="'maritalStatus'"
          req=""
        >
          <option value="">Selecione</option>
          <x-select.option-foreach-and-isset
            :arr="$maritalStatus"
            value="id"
            :object="$cliente"
            foreignId="maritalstatus_id"
            column="nome"
          />
        </x-select.select-and-label>
        @if ($errors->has('maritalstatus_id'))
            <p class="errorMessages">{{$errors->first('maritalstatus_id')}}</p>
        @endif
      </div>
    </div>
    <label for="" class="form-label">Documentos:</label>
      <div class="row mb-3">
        <div class="col-12 d-md-flex">
          <div class="form-check d-flex d-md-block col-2 align-items-center">

            {{-- Firma Aberta Check --}}
            <x-input.check-and-label
            :obj="$cliente"
            name="firma_aberta"
            :id="'firma_aberta'"
            title="Firma aberta"
            />
            @if ($errors->has('firma_aberta'))
              <p class="errorMessages">{{$errors->first('firma_aberta')}}</p>
            @endif
          </div>

          {{-- CNH check --}}
          <div class="form-check col-2">
            <x-input.check-and-label
              :obj="$cliente"
              name="cnh"
              :id="'cnh'"
              title="CNH"
            />
            @if ($errors->has('cnh'))
              <p class="errorMessages">{{$errors->first('cnh')}}</p>
            @endif
          </div>

          {{-- CPF check --}}
          <div class="form-check col-2">
            <x-input.check-and-label
              :obj="$cliente"
              name="cpf"
              :id="'cpf'"
              title="CPF"
            />
            @if ($errors->has('cpf'))
              <p class="errorMessages">{{$errors->first('cpf')}}</p>
            @endif
          </div>

          {{-- Certificacao check --}}
          <div class="form-check col-2">
            <x-input.check-and-label
              :obj="$cliente"
              name="certificacao_digital"
              :id="'certificacao_digital'"
              title="Certificação"
            />
            @if ($errors->has('certificacao_digital'))
              <p class="errorMessages">{{$errors->first('certificacao_digital')}}</p>
            @endif
          </div>

          {{-- RG check --}}
          <div class="form-check col-2">
            <x-input.check-and-label
              :obj="$cliente"
              name="rg"
              :id="'rg'"
              title="RG"
            />
            @if ($errors->has('rg'))
              <p class="errorMessages">{{$errors->first('rg')}}</p>
            @endif
          </div>

          {{-- passaporte check --}}
          <div class="form-check col-2">
            <x-input.check-and-label
              :obj="$cliente"
              name="passaporte"
              :id="'passaporte'"
              title="Passaporte"
            />
            @if ($errors->has('passaporte'))
              <p class="errorMessages">{{$errors->first('passaporte')}}</p>
            @endif
          </div>
        </div>                      
      </div>
      <div class="row mb-3">

        {{-- Estado Select --}}
        <div class="col-md-6">
          <x-select.select-and-label
            name="estadobrasil_id"
            title="Estado:"
            :id="'estado_brasil'"
            req=""
          >
            <option value="">Selecione</option>
              <x-select.option-foreach-and-isset
                :arr="$estados"
                value="id"
                :object="$cliente"
                foreignId="estadobrasil_id"
                column="nome"
              />
          </x-select.select-and-label>
          @if ($errors->has('estadobrasil_id'))
            <p class="errorMessages">{{$errors->first('estadobrasil_id')}}</p>
          @endif
        </div>

        {{-- Cidade Select --}}
        <div class="col-md-6">
          <x-select.select-and-label
            name="cidadebrasil_id"
            title="Cidade:"
            :id="'cidade_brasil'"
            req=""
          >
            @isset($cidades)
              <option value="">Selecione</option>
              <x-select.option-foreach-and-isset
                :arr="$cidades"
                value="id"
                :object="$cliente"
                foreignId="cidadebrasil_id"
                column="nome"
              />
            @endisset
          </x-select.select-and-label>
          @if ($errors->has('cidade_brasil'))
            <p class="errorMessages">{{$errors->first('cidade_brasil')}}</p>
          @endif
        </div>
      </div> 
      <div class="row mb-3">

        {{-- Pais select --}}
        <div class="col-md-6">
          <x-select.select-and-label
            name="pais_id"
            title="País:"
            :id="'pais'"
            req=""
          >
            <option value="">Selecione</option>
              <x-select.option-foreach-and-isset
                :arr="$countries"
                value="id"
                :object="$cliente"
                foreignId="pais_id"
                column="nome"
              />
          </x-select.select-and-label>
          @if ($errors->has('pais_id'))
            <p class="errorMessages">{{$errors->first('pais_id')}}</p>
          @endif
        </div>

        {{-- Cidade Exterior select --}}
        <div class="col-md-6">
          <x-select.select-and-label
            name="cidade_id"
            title="Cidade no Exterior:"
            :id="'cidade'"
            req=""
          >
            @isset($cities)
              <option value="">Selecione</option> 
              <x-select.option-foreach-and-isset
                :arr="$cities"
                value="id"
                :object="$cliente"
                foreignId="cidade_id"
                column="nome"
              />               
            @endisset
          </x-select.select-and-label>
          @if ($errors->has('cidade_id'))
            <p class="errorMessages">{{$errors->first('cidade_id')}}</p>
          @endif
        </div>
      </div>
      <div class="row mb-3">

        {{-- RG File --}}
        <div class="col-md-3">
          <x-input.input-and-label
            :id="'rgFileCliente'"
            title="RG:"
            type="file"
            name="rg_file"
            value=""
            req=""
          />
          @if ($errors->has('rg_file'))
            <p class="errorMessages">{{$errors->first('rg_file')}}</p>
          @endif
        </div>

        {{-- Passaporte File --}}
        <div class="col-md-3">
          <x-input.input-and-label
            :id="'passaporteFileCliente'"
            title="Passaporte:"
            type="file"
            name="passaporte_file"
            value=""
            req=""
          />
          @if ($errors->has('passaporte_file'))
            <p class="errorMessages">{{$errors->first('passaporte_file')}}</p>
          @endif
        </div>

        {{-- CNH File --}}
        <div class="col-md-3">
          <x-input.input-and-label
            :id="'cnhFileCliente'"
            title="CNH:"
            type="file"
            name="cnh_file"
            value=""
            req=""
          />
          @if ($errors->has('cnh_file'))
            <p class="errorMessages">{{$errors->first('cnh_file')}}</p>
          @endif
        </div>

        {{-- Comprovante endereco file --}}
        <div class="col-md-3">
          <x-input.input-and-label
            :id="'enderecoFileCliente'"
            title="Endereço:"
            type="file"
            name="endereco_file"
            value=""
            req=""
          />
          @if ($errors->has('endereco_file'))
            <p class="errorMessages">{{$errors->first('endereco_file')}}</p>
          @endif
        </div>
      </div> 
  </div>
</section>