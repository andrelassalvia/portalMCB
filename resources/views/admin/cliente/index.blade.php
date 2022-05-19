@extends('layouts.base')

@section('content')
  {{-- All contacts list --}}
  <section title="Lista de clientes" class="home-clients-list"> 
    <h3>Lista de Clientes</h3>
    <table class="table table-hover table-borderless mx-auto" id="tableContacts">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th class="d-none" scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Demanda</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>         
        @foreach ($clientes as $item)           
            <tr>                        
              <th scope="row">{{$item->updated_at}}</th>
              <td class="d-none">{{$item->id}}</td>
              <td>{{$item->nome}}</td>
              <td style="font-size: small">{{$item->telefone}}</td>
              <td>
                @isset($item->ordens[0])
                  {{$item->ordens[0]->tipoServico->nome}}
                @endisset
              </td>
              <td>{{$item->statusCliente->nome}}</td>
            </tr>
        @endforeach
      </tbody>                    
    </table>
  </section>
        
  <script src="{{asset('js/tableContacts.js')}}"></script>  
@endsection