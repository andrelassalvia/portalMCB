<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\TipoServico;
use App\Models\Cliente;
use App\Models\Comentarios;
use App\Models\OrdemServico;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use App\Traits\redirectAlertsMessages;

class ClienteController extends Controller
{
    use redirectAlertsMessages;

    public function __construct(Cliente $cliente, OrdemServico $order)
    {
        $this->cliente = $cliente;
        $this->order = $order;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     * came from telephone blade
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // validation rules
        $rulesClient = $this->cliente->partialRules($request->all());
        $rulesOrder = $this->order->partialRules($request->all());
        $validateClient = Validator::make(
            $request->all(), 
            $rulesClient,
        );
        $validateOrder = Validator::make(
            $request->all(),
            $rulesOrder,
            ['tiposervico_id.required' => 'O campo demanda é obrigatório']
        );
        // redirect case validation fails
        if($validateClient->fails()){
            return redirectAlertsMessages::redirectErrors(
                $validateClient,
                'Ok'
            );
        }
        if($validateOrder->fails()){
            return redirectAlertsMessages::redirectErrors(
                $validateOrder,
                'Ok'
            );
        }

        // find recently created client and update 
        $updated = $this->cliente->findAndUpdate($id, $request->all());

        // bind a type of service in this client
        $service = $request['tiposervico_id'];

        // create an order simultaneously with a new client
        OrdemServico::create(
            [
                'cliente_id' => $id,
                'tiposervico_id' => $service
            ]
        );

        // redirect response from update
        if($updated){
            return redirectAlertsMessages::redirectSuccess(
                ['success' => 'Cliente inserido com sucesso. Deseja cadastrar ordem de serviço?'],
                'Sim',
                ['route' => 'ordens.create', 'param' => $id],
                'Não',
                ['route' => 'clients.potential']
            );
        } else {
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Falha no cadastramento'],
                'Ok'
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return  view('admin.cliente.show', compact('cliente'));                        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
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
        // look for client
        $cliente = $this->cliente->find($id);

        // check wether an order was saved or not
        $order = OrdemServico::where('cliente_id', $id)->get()->last();

        // save type of service from request to use in ordem_servico table
        $tipoServico = $request['tiposervico_id'];

        // client doesn't exist send a warning
        if($cliente === null){
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Cliente não encontrado no banco de dados'],
                'Ok'
            );

            // client exist, check wether is a partial update or not to determine the validation 
            // rules
        } else if($request->method() === 'PATCH'){
            
            // partial rules because method patch 
            $rules = $this->cliente->PartialRules($request->all());
            $clientValidate = Validator::make(
                $request->all(),
                $rules
            );
            if($clientValidate->fails()){
                return redirectAlertsMessages::redirectErrors(
                    $clientValidate,
                    'Ok'
                );
            }

            // validate order
            $orderValidated = Validator::make(
                $request->all(),
                [
                    'tiposervico_id' => 'required|integer'
                ], 
                [
                    'tiposervico_id.required' => 'O campo demanda é obrigatório'
                ]);
                if($orderValidated->fails()){
                    return redirectAlertsMessages::redirectErrors(
                        $orderValidated,
                        'Ok'
                    );
                }
        } else {
            // validate with all rules
            $request->validate($cliente->rules());
        }

        // update client
        $update = $cliente->update($request->all());

        // update order binded with this client
        // no order in database, create one
        if($order == null){

            // check wether demanda field was filled
            if($tipoServico){
                OrdemServico::create(
                    [
                        'cliente_id' => $id,
                        'tiposervico_id' => $tipoServico
                    ]
                );
            }
        } else {
            // in case a previous order exists, update it
            $order->update(['tiposervico_id' => $tipoServico]);
        }
 
        // response message
        if($update){
            return redirectAlertsMessages::redirectSuccess(
                ['success' => 'Dados do cliente alterados com sucesso'],
                'Ok',
                ['route' => 'clients.potential']
            );
        } else {
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Falha na alteração. Tente novamente'],
                'Ok'
            );
        }              
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deleting client after creating telephone but before save client data
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clients.potential');
    }
}
