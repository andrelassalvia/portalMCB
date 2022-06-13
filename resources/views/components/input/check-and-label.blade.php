@if ($obj == "")
    <input 
        type="hidden" 
        name="{{$name}}" 
        value="0"
        id="{{$id}}"
    >
    <input 
        class="form-check-input" 
        type="checkbox" 
        name="{{$name}}" 
        value="1" {{old($name) == 1 ? 'checked' : ''}}
        id="{{$id}}"
    >   
@elseif($obj[$name] == 1)
    <input
        class="form-check-input"
        type="checkbox"
        name="{{$name}}"
        checked
        id={{$id}}
        value="1"
    >
@else
    <input 
        class="form-check-input"
        type="checkbox"
        name="{{$name}}"
        value="1" {{old($name) == 1 ? 'checked' : ''}}
        id="{{$id}}"
    >
@endif

<label class="form-check-label" for="{{$id}}">
    {{$title}}
</label>  

{{-- 
    obj
    name
    id
    title
     --}}