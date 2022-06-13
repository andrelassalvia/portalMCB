<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\TipoServico;
use App\Models\Cliente;
use App\Models\Occupation;
use App\Models\MaritalStatus;
use App\Models\OrdemServico;
use App\Models\Pais;
use App\Models\Cidade;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
     * Method to create a new client
     */
    public function create()
    {
        $services = TipoServico::orderBy('nome')->get();
        $states = EstadoBrasil::orderBy('nome')->get();

        // send a city to not brake the code
        $cities = CidadeBrasil::find(1100015)->get();
        $tel = session()->get('tel');

        return view('admin.cliente.create', compact('services', 'states', 'cities', 'tel'));
    }

    /**
     * Store a newly created resource in storage.
     * came from telephone blade
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation rules
        $rulesClient = $this->cliente->partialRules($request->all());
        $rulesOrder = $this->order->partialRules($request->all());
        $request->validate($rulesClient);
        $request->validate($rulesOrder, $this->order->errorMsg());

        // clean phone number before store
        $tel = $this->cliente->cleanPhone($request->telefone);

        $clienteId = DB::table('cliente')->insertGetId(
            [
                'nome' => $request->nome,
                'telefone' => $tel,
                'estadobrasil_id' => $request->estadobrasil_id,
                'cidadebrasil_id' => $request->cidadebrasil_id,
                'firma_aberta' => $request->firma_aberta,
                'cnh' => $request->cnh,
                'cpf' => $request->cpf,
                'certificacao_digital' => $request->certificacao_digital,
                'created_at' => Carbon::now()->toDateTimeString()
            ]
        );

        // bind a type of service in this client
        $service = $request['tiposervico_id'];

        // create an order simultaneously with a new client
        $ordemId = DB::table('ordem_servico')->insertGetId(
            [
                'cliente_id' => $clienteId,
                'tiposervico_id' => $service
            ]
        );

        // redirect response from update
        return redirectAlertsMessages::redirectSuccess(
            ['success' => 'Cliente inserido com sucesso. Deseja cadastrar ordem de serviço?'],
            'Sim',
            ['route' => 'ordens.create', 'param' => $ordemId],
            'Não',
            ['route' => 'clients.potential']
        );
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
        $occupations = Occupation::orderBy('nome')->get();
        $maritalStatus = MaritalStatus::orderBy('nome')->get();
        (isset($cliente->ordens[0]) ? $ordem = $cliente->ordens[0] : $ordem = null);
        $estados = EstadoBrasil::orderBy('nome')->get();
        $countries = Pais::orderBy('nome')->get();
       
        // Load only cities from the client state - reduce the amount of registers
        $cidadeIdBegin = Str::padRight($cliente->estadobrasil_id, 7,'0');
        $cidadeIdFim = Str::padRight($cliente->estadobrasil_id, 7, '9');
        $cidades = CidadeBrasil::whereBetween('id', [$cidadeIdBegin, $cidadeIdFim])->get();

        $cities = Cidade::where('pais_id', $cliente->pais_id)->orderBy('nome')->get();
        
        return view(
            'admin.cliente.edit', 
            compact(
                'cliente', 
                'occupations',
                'maritalStatus',
                'estados',
                'ordem',
                'cidades',
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
