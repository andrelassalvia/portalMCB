<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\TipoServico;
use App\Models\CidadeBrasil;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Validator;

class TelephoneController extends Controller
{
    /**
     * method to show a modal to insert a new telephone
     * intending to create a new client
     */
    public function create()
    {
        return view('admin.telephone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation rules
        $validated = Validator::make(
            $request->all(),
            [
                'telefone' => array(
                    'required',
                    'regex:/[-+()0-9]/'
                ),
            ]
        );
        // Redirect to alert errors case validation fails
        if($validated->fails()){
            return redirect()
                ->route('alerts.errors')
                ->withErrors($validated)
                ->withInput();
        }

        // remove all characters but numbers to show telephone in form
        $tel = $request->telefone;
        $tel = preg_replace('/[^0-9]/', '', $tel);

        // check if the phone length is ok
        $length = Str::length($tel);
        if($length < 12){
            return redirect()
            ->route('alerts.errors')
            ->withErrors(
                [
                    'errors' => 'Telefone deve iniciar com o código do país'
                ])
            ->withInput();
        }

        // check if the phone already exists
        $cliente = Cliente::where('telefone', $tel)->get()->first();

        // if telephone exists call it and edit
        if($cliente){
            $estado = $cliente['estadobrasil_id'];
            $cidade = $cliente['cidadebrasil_id'];
            (isset($cliente->ordens[0]) ? $ordem = $cliente->ordens[0] : $ordem = null);
            $states = EstadoBrasil::orderBy('nome')->get();
            $services = TipoServico::orderBy('nome')->get();

            // Load only cities from the client state - reduce the amount of registers
            $cityIdBegin = Str::padRight($cliente->estadobrasil_id, 7,'0');
            $cityIdEnd = Str::padRight($cliente->estadobrasil_id, 7, '9');
            $cities = CidadeBrasil::whereBetween('id', [$cityIdBegin, $cityIdEnd])->get();

            return view(
                'admin.cliente.edit', 
                compact(
                    'cliente',
                    'services',
                    'states', 
                    'cities', 
                    'ordem',
                    'estado',
                    'cidade'
                )
            );
            
            // if not create an id and redirect to create blade
        } else {
            $clienteId = DB::table('cliente')
                ->insertGetId(
                [
                        'telefone' => $tel,
                        'nome' => '',
                        'firma_aberta' => 0,
                        'cnh' => 0,
                        'cpf' => 0,
                        'certificacao_digital' => 0,
                        'created_at' => Carbon::now()->toDateTimeString()
                    ]
            );
            $cliente = Cliente::find($clienteId);
            return view(
                'admin.cliente.create', 
                compact('cliente', 'states', 'services', 'cities')
            );
        }
    }
}
