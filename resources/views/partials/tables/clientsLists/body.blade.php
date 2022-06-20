<th scope="row">{{$item->created_at}}</th> {{-- Date--}}
<td class="d-none">{{$item->id}}</td> {{-- Passing id to DataTable in JS--}}
<td>{{$item->nome}}</td> {{-- name--}}
<td style="font-size: small">{{$item->telefone}}</td> {{-- telefone--}}
<td>
  {{-- Case a demand was placed --}}
  {{-- @isset($item->ordens[0])
    {{$item->ordens[0]->tipoServico->nome}}
  @endisset --}}
</td>
<td>
    {{-- Firma Aberta icon  --}}
    <x-icon.document-in-index-last
    column="firma_aberta"
    iconSuccess="bi-check2-circle"
    iconDanger="bi-dash-circle"
    :item="$item"
  />                         
</td>
<td>
    {{-- CNH icon --}}
    <x-icon.document-in-index-last
      column="cnh"
      iconSuccess="bi-check2-circle"
      iconDanger="bi-dash-circle"
      :item="$item"
    />
</td>
<td>
    {{-- CPF Icon --}}
  <x-icon.document-in-index-last
    column="cpf"
    iconSuccess="bi-check2-circle"
    iconDanger="bi-dash-circle"
    :item="$item"
  />                 
</td>
<td>
    {{-- Certificacao Digital Icon --}}
  <x-icon.document-in-index-last
    column="certificacao_digital"
    iconSuccess="bi-check2-circle"
    iconDanger="bi-dash-circle"
    :item="$item"
  />                 
</td>