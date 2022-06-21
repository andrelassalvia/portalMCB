
@foreach ($arr as $key => $item)
    {{-- @if (Input::old($name) == $key)
        <option value="{{$key}}" selected>{{$item[$column]}}</option>    
    @else
        <option value="{{$item[$value]}}">{{$item[$column]}}</option>
        @endif --}}
        <option {{old($name) == $key ? "selected" : ""}} value="{{$item[$value]}}">{{$item[$column]}}</option>
@endforeach

{{-- 
    $arr
    $value
    $column
    $name
    --}}