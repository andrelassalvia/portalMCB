@extends('layouts.base')

@section('content')
  {{-- Last contacts list --}}
  <section title="Lista de potenciais clientes" class="home-clients-list"> 
    <h3>Clientes Inativos</h3>
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
              
              {{-- Reativar Button --}}
              <td>
                <a 
                  href="{{route('clientes.active', $item->id)}}" 
                  class="btn btn-sm btn-outline-success"
                >
                  Reativar
                </a>
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