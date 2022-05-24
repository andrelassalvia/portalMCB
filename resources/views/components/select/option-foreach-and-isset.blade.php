@foreach ($arr as $item)
    <option 
        value="{{$item[$value]}}" {{$item[$value] == $object[$foreignId] ? 'selected' : ''}}
    >
        {{$item[$column]}}
    </option>
@endforeach
