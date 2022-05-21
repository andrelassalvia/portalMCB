{{-- component to create a dropdown link --}}
<li class="nav-link dropdown">
    <a 
      class="dropdown-toggle"  
      href="#"                             
      data-bs-toggle="dropdown"
    >
    
    {{-- slot to show a inco beside the link --}}
    {{$icon}}

    {{-- name of the link --}}
      <span class="text nav-text">{{$title}}</span>                              
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        {{-- space to insert dropdown itens --}}
      {{$slot}}
    </ul>
  </li>