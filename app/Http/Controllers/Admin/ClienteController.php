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
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
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
        $clientes = Cliente::IndexStatus([1,2,3,4]);
        return view('admin.cliente.index', compact('clientes'));
    }

    /**
    * Method to show only contacts with potencial status
    * Inactive or with orders running will not be shown here
    * @param status_id from status_cliente table
    * @return clientes list to a view 
    */
    public function indexLast()
    {
        $clientes = Cliente::IndexStatus([1]);  
        return view('admin.cliente.indexLast', compact('clientes'));
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
        $validated = Validator::make($request->all(), [
            'nome' => 'required|min:3|max:50|string',
            'telefone' =>'required|unique:cliente,telefone',
            'estadobrasil_id' => 'integer|nullable',
            'cidadebrasil_id' => 'integer|nullable',
            'firma_aberta' => 'boolean',
            'tiposervico_id' => 'required',
            'cnh' => 'boolean',
            'cpf' => 'boolean',
            'certificacao_digital' => 'boolean'
        ], ['tiposervico_id.required' => 'O campo demanda é obrigatório']);
        
        // redirect case validation fails
        if($validated->fails()){
            return Cliente::redirectErrors($validated);
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
        return Cliente::responseFromUpdate($updated, $id);
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
            return Cliente::redirectErrors(
                [
                    'errors' => 'Cliente não encontrado no banco de dados. Cadastrá-lo novamente.'
                    ]
                );

            // client exist, check wether is a partial update or not to determine the validation 
            // rules
        } else if($request->method() === 'PATCH'){
            $dynamicRulesClient = array();
            
            // create partial rules to partial update
            foreach($cliente->rules() as $input => $rule){
                if(array_key_exists($input, $request->all())){
                    $dynamicRulesClient[$input] = $rule;
                }
            }  
            // validate client with partial rules
            $request->validate($dynamicRulesClient);

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
                    return Cliente::redirectErrors($orderValidated);
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
        return Cliente::redirectSuccess(
            [
                'success' => 'Dados do cliente alterados com sucesso'
            ]
        );               
        } else {
            return Cliente::redirectErrors(
                [
                    'errors' => 'Falha na alteração. Tente novamente'
                ]
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
        //
    }

    /**
    * method to turn client status as inactive
    * @param id
    * @return message with a success or error response
    */
    public function inactive($id)
    {
        $cliente = Cliente::find($id);
        $update = $cliente->update(['statuscliente_id' => 2]);
        if($update){
            return Cliente::redirectSuccess(
                [
                    'success' => 'Cliente inativado com sucesso'
                ]
            );
        } else {
            return Cliente::redirectErrors(
                [
                    'errors' => 'Falha na inativação do cliente'
                ]
            );
        }
    }
}
