<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdemServico;
use App\Models\Cliente;
use App\Models\TipoServico;

class OrdemNewController extends Controller
{
    /**
     * Controller to manage the creation of a new order
     * 
     */
    public function __construct(OrdemServico $ordem)
    {
        $this->ordem = $ordem;
    }

    /**
     * method to create a view for update a resource
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $ordem = $this->ordem->where('cliente_id', $id)->get()->last();
        $demandas = TipoServico::orderBy('nome')->get();
        return view('admin.ordemNew.edit', compact('cliente', 'ordem', 'demandas'));
    }

    /**
     * method to update a resource
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->ordem->rules(), $this->ordem->errorMsg());
        $ordem = $this->ordem->find($id);
        $ordem->update($request->all());
        $clienteId = $request['cliente_id'];
        $cliente = Cliente::find($clienteId);
        $statusCliente = $request['statuscliente_id'];
        $cliente->update(['statuscliente_id' => $statusCliente]);

        return redirect()->route('clients.withOrders');
    }
}
