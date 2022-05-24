
@foreach ($arr as $item)
    <option value="{{$item[$value]}}">{{$item[$column]}}</option>
@endforeach