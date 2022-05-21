<nav class="sidebar">

  {{-- Logo --}}
  <header>
    <div class="image-text">
      <span class="image">
        <a href="{{route('home')}}">
          <img src="{{asset('imgs/logo-mcb-header.png')}}" alt="logo" />
        </a>
      </span>
    </div>
    <i class="bx bx-chevron-right toggle"></i>
  </header>


  <div class="menu-bar">
    <div class="menu">
      <ul class="menu-links">

        {{-- Dashboard --}}
        <li class="nav-link">
          <a href="{{route('home')}}">
            <i class="bx bx-home-alt icon"></i>
            <span class="text nav-text">Dashboard</span>
          </a>
        </li>

        {{-- Clientes --}}
        <x-dropdown.link title="Clientes">
          <x-slot name="icon">
            <i class="bx bx-face icon"></i>
          </x-slot>
          <x-dropdown.item title="Últimos Contatos" route="clientes.last"></x-dropdown.item>
          <x-dropdown.item title="Novo cliente" route="clientes.telephone"></x-dropdown.item>
          <x-dropdown.item title="Lista Clientes" route="clientes.index"></x-dropdown.item>
        </x-dropdown.link>

        {{-- Ordem Servico --}}
        <x-dropdown.link title="Ordens Serviço">
          <x-slot name="icon">
            <i class="bx bx-bell icon"></i>
          </x-slot>
          <x-dropdown.item title="Lista de Ordens" route="ordens.index"></x-dropdown.item>
        </x-dropdown.link>

        {{-- Fornecedores --}}
        <li class="nav-link">
          <a href="#">
            <i class="bx bx-pie-chart-alt icon"></i>
            <span class="text nav-text">Fornecedores</span>
          </a>
        </li>

        {{-- Apoio --}}
        <li class="nav-link">
          <a href="#">
            <i class="bx bx-heart icon"></i>
            <span class="text nav-text">Apoio</span>
          </a>
        </li>
      </ul>
    </div>

    {{-- Logout --}}
    <div class="bottom-content">
      <li class="">
        <a 
        href="{{route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          <i class="bx bx-log-out icon"></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </div>
</nav>