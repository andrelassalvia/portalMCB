<option value="">Selecione</option> 
  @foreach ($cidades as $item)
    <option value="{{$item->id}}">{{$item->nome}}</option> 
  @endforeach 