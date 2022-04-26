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
        $clientes = Cliente::with(['ordens'])
            ->where('statuscliente_id', 1)
            ->orderBy('created_at', 'desc')
            ->get();   

            // dd($clientes);

                        
        $orders = Cliente::with(['ordens', 'estadoBrasil'])
            ->where('statuscliente_id', 3)
            ->orderBy('updated_at', 'asc')
            ->get();
            // ->paginate(10, ['*'], 'orders');                         
            
        return view ('home', compact('clientes', 'orders'));                       
    }
}
