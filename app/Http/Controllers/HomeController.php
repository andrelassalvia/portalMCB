<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\OrdemServico;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::cursor()->filter(function($cliente){
            return $cliente->statuscliente_id = 1;
        });
        // $clientes = Cliente::with(['ordens'])
        //     ->where('statuscliente_id', 1)
        //     ->orderBy('created_at', 'desc')
        //     ->get();   
                        

        $orders = OrdemServico::join('tipo_servico', 'ordem_servico.tiposervico_id', '=', 'tipo_servico.id' )
            ->join('cliente', 'ordem_servico.cliente_id', '=', 'cliente.id') 
            ->where('statuscliente_id', 3)
            ->where('statusordem_id', '<', 7)
            ->get();
                               
                                                
        return view ('home', compact('clientes', 'orders'));                       
    }
}
