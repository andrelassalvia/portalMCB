<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- including head --}}
  @include('layouts.head')
  <body class="base-body">
      <div id="app">
          <div class="container">
            {{-- including sidebar --}}
              @include('layouts.sidebar')                                                            
              <main>
                {{-- Yielding content --}}
                  @yield('content')
              </main>
          </div>
      </div>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous">
      </script>

      {{-- script to manage sidebar and it's dropdowns --}}
      <script src="{{asset('js/layouts/base.js')}}"></script>
  </body>
</html>