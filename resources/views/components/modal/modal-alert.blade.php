{{-- component to show a modal as alert --}}
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        {{-- title on header modal --}}
        <h5>{{ $title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        {{-- content of the modal --}}
        {{ $slot }}
      </div>
      <div class="modal-footer">

        {{-- message printed when an alert is trigged --}}
        {{ $msg }} 

        {{-- not all modal will use cancel or ok buttons --}}
        @isset($btncancel)
        <button 
          type="button" 
          class="btn btn-mcb" 
          id="cancelButton"
          data-route="{{$routecancel}}"
          @empty($btncancel)
            style="display: none"
          @endempty
        >
          {{$btncancel}}
        </button>
        @endisset
        @isset($btnok)
          <button 
            type="button" 
            class="btn btn-mcb" 
            id="okButton"
            data-route="{{$routeok}}"
            @empty($btnok)
              style="display: none"
            @endempty
          >
            {{$btnok}}
          </button>
        @endisset
      </div>
    </div>
  </div>
</div>