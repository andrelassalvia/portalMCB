{{-- HTML to load list of cities on dropdown list --}}
{{-- Passar para uma pasta especifica de cidades assim como o controller --}}
{{-- Cities in Brazil --}}
<option value="">Selecione</option> 
@isset($cidades)
  @foreach ($cidades as $item)
    <option value="{{$item->id}}">{{$item->nome}}</option> 
  @endforeach 
@endisset

{{-- Cities in Europe --}}
<option value="">Selecione</option> 
@isset($cities)
  @foreach ($cities as $item)
    <option value="{{$item->id}}">{{$item->nome}}</option> 
  @endforeach 
@endisset

