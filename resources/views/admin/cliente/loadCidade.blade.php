<option value="">Selecione</option> 
@isset($cidades)
  @foreach ($cidades as $item)
    <option value="{{$item->id}}">{{$item->nome}}</option> 
  @endforeach 
@endisset

<option value="">Selecione</option> 
@isset($cities)
  @foreach ($cities as $item)
    <option value="{{$item->id}}">{{$item->nome}}</option> 
  @endforeach 
@endisset

