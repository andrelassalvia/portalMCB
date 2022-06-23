
@foreach ($arr as $key => $item)
        <option value="{{$item[$value]}}">{{$item[$column]}}</option>
@endforeach

{{-- 
    $arr
    $value
    $column
    $name
    --}}