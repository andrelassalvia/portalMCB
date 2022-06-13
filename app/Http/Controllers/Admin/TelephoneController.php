<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\TipoServico;
use App\Models\CidadeBrasil;
use App\Models\Cliente;
use Illuminate\Support\Str;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Validator;
use App\Traits\redirectAlertsMessages;

class TelephoneController extends Controller
{
    use redirectAlertsMessages;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * method to show a modal to insert a new telephone
     * intending to create a new client
     * @return view
     */
    public function create()
    {
        return view('admin.telephone.create');
    }

    /**
     * Method to check if a telephone exist when creating a new client
     * if exist -> redirect to update client as potential
     * if not -> redirect to create a new client
     */
    public function telephoneCheck(Request $request)
    {
        // validation rules
        $rulesTelephone = $this->cliente->partialRules($request->all());
        $validatedTelephone = Validator::make(
            $request->all(),
            $rulesTelephone
        );

        // Redirect to alert errors case validation fails
        if($validatedTelephone->fails()){
            return redirectAlertsMessages::redirectErrors(
                $validatedTelephone,
                'Ok'
            );
        }

        // handling phone number before save
        $telClean = $this->cliente->cleanPhone($request->telefone);
        $tel = $this->cliente->formatTelephone($telClean);
        if(Str::length($tel) < 17){
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Não esqueça de inserir o código de área do país'],
                'Ok',
            );
        }
        // check if the phone already exists
        $cliente = Cliente::where('telefone', $telClean)->get()->first();

        // variables to be used within edit and create blades
        $states = EstadoBrasil::orderBy('nome')->get();
        $services = TipoServico::orderBy('nome')->get();

        // if telephone exists call it and edit
        if($cliente){
            $estado = $cliente['estadobrasil_id'];
            $cidade = $cliente['cidadebrasil_id'];
            (isset($cliente->ordens[0]) ? $ordem = $cliente->ordens[0] : $ordem = null);

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
        } else {
            // redirect to create a new client
            return redirect()->route('clientes.create')->with(['tel'=> $tel]);
        }
    }
}
