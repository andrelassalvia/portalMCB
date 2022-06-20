@extends('layouts.base')

@section('content')


  {{-- Last contacts list --}}
  <section title="Lista de potenciais clientes" class="home-clients-list"> 
    <h3>Clientes Potenciais</h3>
    {{-- Search section --}}
  <section title="Pesquisa">
    <form action="{{route('clients.potential')}}">
      <div class="row">

        <div class="col-md-4">
          <input type="search" class="form-control form-control-sm" name="q" value="{{$q}}">
        </div>

        <div class="col-md-2 col-3">
          <select name="sortBy" class="form-control form-control-sm" value="{{$sortBy}}">
            @foreach (['nome', 'email', 'telefone'] as $col)
                <option @if($col == $sortBy) selected @endif value="{{$col}}">{{ucfirst($col)}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-2 col-3">
          <select name="orderBy" class="form-control form-control-sm" value="{{$orderBy}}">
            @foreach (['asc', 'desc'] as $order)
                <option @if($order == $orderBy) selected @endif value="{{$order}}">{{ucfirst($order)}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-2 col-3">
          <select name="perPage" class="form-control form-control-sm" value="{{$perPage}}">
            @foreach (['10', '25', '50', '100'] as $page)
                <option @if($page == $perPage) selected @endif value="{{$page}}">{{$page}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-2 col-3">
          <button type="submit" class="btn btn-mcb btn-sm">Filtrar</button>
        </div>

      </div>
    </form>
  </section>
    <table class="table table-hover table-borderless mx-auto" id="tableContacts">
      <thead>
        <tr>
          @include('partials.tables.clientsLists.head')
        </tr>
      </thead>
      <tbody>         
        @foreach ($clientes as $item)           
            <tr>
              @include('partials.tables.clientsLists.body')                        
              
              {{-- Inativar Button --}}
              <td>
                <a 
                  href="{{route('clientes.inactive', $item->id)}}" 
                  class="btn btn-sm btn-outline-danger"
                >
                  Inativar
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>                    
        </table>
  </section>
  
  {{-- <script 
    type="text/javascript" 
    src="{{asset('js/tableContacts.js')}}"
    >
  </script> --}}
  
@endsection