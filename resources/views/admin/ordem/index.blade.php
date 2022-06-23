@extends('layouts.base')

@section('content')

  {{-- Orders List --}}
  <section title="Lista de Ordens de Serviço" class="home-clients-list"> 
    <h3>Ordens de Serviço em Andamento</h3>
    
    {{-- Search section --}}
    <form action="{{route('ordens.index')}}" class="mt-3 mx-auto form-search">
      <div class="row">

        <div class="col-3">
          <input 
            type="search" 
            class="form-control form-control-sm" 
            name="q" 
            value="{{$q}}"
            placeholder="pesquisar..."
          >
        </div>

        <div class="col-2">
          <select name="sortBy" class="form-select form-select-sm" value="{{$sortBy}}">
            @foreach (['cliente', 'status', 'demanda'] as $col)
                <option @if($col == $sortBy) selected @endif value="{{$col}}">{{ucfirst($col)}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-2">
          <select name="orderBy" class="form-select form-select-sm" value="{{$orderBy}}">
            @foreach (['asc', 'desc'] as $order)
                <option @if($order == $orderBy) selected @endif value="{{$order}}">{{ucfirst($order)}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-2">
          <select name="perPage" class="form-select form-select-sm" value="{{$perPage}}">
            @foreach (['10', '25', '50', '100'] as $page)
                <option @if($page == $perPage) selected @endif value="{{$page}}">{{$page}}</option>
            @endforeach
          </select>
        </div>

        <div class="col-3">
          <button type="submit">
            <i class='bx bx-search-alt-2'></i>
          </button>
        </div>

      </div>
    </form>
  
    <table class="table table-hover table-borderless mx-auto mt-3" id="tableContacts">
      <thead>
        <tr>
          @include('partials.tables.ordersList.head')
        </tr>
      </thead>
      <tbody>         
        @foreach ($orders as $item)           
          <tr data-id="{{$item->id}}">
            @include('partials.tables.ordersList.body')                        
            
            {{-- See order Button --}}
            <td>
              <a 
                href="{{route('ordens.show', $item->id)}}" 
                class="btn btn-sm btn-outline-danger"
              >
                Inativar
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>                    
    </table>

    <div class="form-search mx-auto">
      {{$orders->links()}}  
    </div>
  </section>
{{-- <script src="{{asset('js/clickShowTr.js')}}"></script> --}}
@endsection