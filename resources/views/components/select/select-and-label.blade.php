<label for="{{$name}}" class="form-label">{{$title}}</label>
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