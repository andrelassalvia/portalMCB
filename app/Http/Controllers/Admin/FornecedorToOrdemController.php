<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\OrdemServico;
use App\Models\Cliente;
use App\Models\TipoServico;
use Barryvdh\Debugbar\Facades\Debugbar;

class FornecedorToOrdemController extends Controller
{
    public function __construct(Fornecedor $fornecedor, OrdemServico $ordem)
    {
        $this->fornecedor = $fornecedor;
        $this->ordem = $ordem;
    }
    /**
     * Method to list providers to be selected when creating 
     * a new order 
     */
    public function listProviders($ordem)
    {
        $providers = Fornecedor::with('estadoBrasil', 'cidadeBrasil')->get();
        return view(
            'admin.fornecedor.index', 
            compact('ordem', 'providers'));
    }

    /**
     * Method to select a provider when creating a 
     * new order
     */
    public function selectProvider($provider, $ordemId)
    {
        $ordem = $this->ordem->find($ordemId);
        $cliente = Cliente::where('id', $ordem->cliente_id)->get();
        $cliente = $cliente[0];
        $demandas = TipoServico::orderBy('nome')->get();
        $update = $ordem->update(['fornecedor_id' => $provider]);
        if($update){
            return redirect()
                ->route('ordensNew.edit', $cliente->id)
                ->with(['ordem', 'cliente', 'demandas']);
        }
    }
}