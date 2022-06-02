<label for="{{$id}}" class="form-label">{{$title}} <span style="color: red">{{$req}}</span></label>
<input 
    type="{{$type}}"
    class="form-control"
    id="{{$id}}"
    name="{{$name}}"
    value="{{old($name)}}"
    >

    {{-- 
        id
        title
        type
        name
        req
        --}}
               