<label for="{{$id}}" class="form-label">{{$title}}</label>
<input 
    type="{{$type}}" 
    class="form-control" 
    id="{{$id}}" 
    name="{{$name}}"
    value="{{old("$name") ?? "$value"}}"
>

{{-- 
    id
    title
    type
    name
    value
    --}}