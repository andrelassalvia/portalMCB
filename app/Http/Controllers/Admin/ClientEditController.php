<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Occupation;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\MaritalStatus;
use App\Models\Pais;
use App\Models\Cidade;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class ClientEditController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Method to create a view to update a resource
     * and create a new service order
     */
    public function edit($id)
    {
        Session::put('clientEditAllUrl', request()->fullUrl());
        $cliente = Cliente::find($id);
        $occupations = Occupation::orderBy('nome')->get();
        $maritalStatus = MaritalStatus::orderBy('nome')->get();
        $countries = Pais::orderBy('nome')->get();
        (isset($cliente->ordens[0]) ? $ordem = $cliente->ordens[0] : $ordem = null);
        $estados = EstadoBrasil::orderBy('nome')->get();

        // Load only cities from the client state - reduce the amount of registers
        $cidadeIdBegin = Str::padRight($cliente->estadobrasil_id, 7,'0');
        $cidadeIdFim = Str::padRight($cliente->estadobrasil_id, 7, '9');
        $cidades = CidadeBrasil::whereBetween('id', [$cidadeIdBegin, $cidadeIdFim])->get();

        $cities = Cidade::where('pais_id', $cliente->pais_id)->orderBy('nome')->get();
        return view(
            'admin.clienteAll.edit', 
            compact(
                'cliente', 
                'occupations',
                'estados',
                'cidades',
                'maritalStatus',
                'countries',
                'cities'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $request->validate($this->cliente->rules());
        $cliente->update($request->all());

        return redirect()->route('ordensNew.edit', compact('id'));
    }
}
