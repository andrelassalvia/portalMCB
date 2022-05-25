@extends('layouts.base')

@section('content')
  {{-- Last contacts list --}}
  <section title="Lista de potenciais clientes" class="home-clients-list"> 
    <h3>Lista de Últimos Contatos</h3>
    <table class="table table-hover table-borderless mx-auto" id="tableContacts">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th class="d-none" scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Demanda</th>
          <th scope="col">Firma</th>
          <th scope="col">CNH</th>
          <th scope="col">CPF</th>                    
          <th scope="col">Certificação</th>                    
          <th scope="col"></th>                    
        </tr>
      </thead>
      <tbody>         
        @foreach ($clientes as $item)           
            <tr>                        
              <th scope="row">{{$item->created_at}}</th> {{-- Date--}}
              <td class="d-none">{{$item->id}}</td> {{-- Passing id to DataTable in JS--}}
              <td>{{$item->nome}}</td> {{-- name--}}
              <td style="font-size: small">{{$item->telefone}}</td> {{-- telefone--}}
              <td>
                {{-- Case a demand was placed --}}
                @isset($item->ordens[0])
                  {{$item->ordens[0]->tipoServico->nome}}
                @endisset
              </td>
              <td>
                  {{-- Firma Aberta icon  --}}
                  <x-icon.document-in-index-last
                  column="firma_aberta"
                  iconSuccess="bi-check2-circle"
                  iconDanger="bi-dash-circle"
                  :item="$item"
                />                         
              </td>
              <td>
                  {{-- CNH icon --}}
                  <x-icon.document-in-index-last
                    column="cnh"
                    iconSuccess="bi-check2-circle"
                    iconDanger="bi-dash-circle"
                    :item="$item"
                  />
              </td>
              <td>
                  {{-- CPF Icon --}}
                <x-icon.document-in-index-last
                  column="cpf"
                  iconSuccess="bi-check2-circle"
                  iconDanger="bi-dash-circle"
                  :item="$item"
                />                 
              </td>
              <td>
                  {{-- Certificacao Digital Icon --}}
                <x-icon.document-in-index-last
                  column="certificacao_digital"
                  iconSuccess="bi-check2-circle"
                  iconDanger="bi-dash-circle"
                  :item="$item"
                />                 
              </td>
              
              {{-- Intaivar Button --}}
              <td>
                <a href="{{route('clientes.inactive', $item->id)}}" class="btn btn-sm btn-outline-danger">Inativar</a>
              </td>
            </tr>
            @endforeach
          </tbody>                    
        </table>
  </section>
  
  <script 
    type="text/javascript" 
    src="{{asset('js/tableContacts.js')}}"
    >
  </script>
  
@endsection