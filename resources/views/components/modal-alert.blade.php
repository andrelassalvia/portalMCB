<div>
  <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5>{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         {{ $slot }}
        </div>
        <div class="modal-footer">
          {{ $msg }} 
          @isset($btncancel)
          <button 
            type="button" 
            class="btn btn-mcb" 
            @empty($btncancel)
            style="opacity: 0" 
            @endempty
            id="cancelButton"
          >
            {{$btncancel}}
          </button>
          @endisset
          <button 
            type="button" 
            class="btn btn-mcb" 
            id="okButton"
          >
            {{$btnok}}</button>
        </div>
      </div>
    </div>
  </div>
</div>