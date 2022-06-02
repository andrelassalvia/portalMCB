<label for="{{$name}}" class="form-label">{{$title}} <span style="color:red">{{$req}}</span></label>
<select
    class="form-select"
    name="{{$name}}"
    id="{{$id}}"
>
    {{$slot}}
</select>

{{-- 
    name
    title
    id
     --}}