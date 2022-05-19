<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\TipoServico;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Comentarios;
use App\Models\OrdemServico;
use Barryvdh\Debugbar\Facades\Debugbar;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::with(['ordens', 'statusCliente'])
        ->whereIn('statuscliente_id', [1,2,3,4])
        ->orderBy('created_at', 'desc')
        ->get();  
        
        return view('admin.cliente.index', compact('clientes'));
    }

    public function indexLast()
    {
        $clientes = Cliente::with(['ordens'])
        ->where('statuscliente_id', 1)
        ->orderBy('created_at', 'desc')
        ->get();  

        return view('admin.cliente.indexLast', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function telephone()
    {
        return view('admin.cliente.telephone');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function telephoneStore(Request $request)
    {
        // data necessary case redirect to edit client
        $states = EstadoBrasil::orderBy('nome')->get();
        $services = TipoServico::orderBy('nome')->get();

        // request from telephone.blade
        $validated = $request->validate(
            [
                'telefone' => array(
                    'required',
                    'regex:/[-+()0-9]/'
                ),
            ]
        );

        // clean the phone number
        $tel = $validated['telefone'];
        $tel = Str::remove(['(',')','+','-', ' ', '/', '*', '.'], $tel);

        // check if the phone length is ok
        $length = Str::length($tel);
        if($length < 12){
            return redirect()
            ->route('clientes.telephone')
            ->withErrors(['errors' => 'Não esqueça o código do país'])
            ->withInput();
        }

        // check if the phone already exists
        $cliente = Cliente::where('telefone', $tel)->get()->first();

        // if client exists call it and edit
        if($cliente){
            return view(
                'admin.cliente.edit', 
                compact('cliente', 'states', 'services')
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
                compact('cliente', 'states', 'services')
            );
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cliente.modal.createAlertErrors');
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
        // to select some rules from client model
        // $dynamicRules = array();
        //     foreach($this->cliente->rules() as $input => $rule){
        //         if(array_key_exists($input, $request->all())){
        //             $dynamicRules[$input] = $rule;
        //         }
        //     }  

        $validated = Validator::make($request->all(), [
            'nome' => 'required|min:3|max:50|string',
            'telefone' =>'required|unique:cliente,telefone',
            'estadobrasil_id' => 'integer|nullable',
            'cidadebrasil_id' => 'integer|nullable',
            'firma_aberta' => 'boolean',
            'cnh' => 'boolean',
            'cpf' => 'boolean',
            'certificacao_digital' => 'boolean'
        ]);
        
            // validate request and update cliente
        // $validated = $request->validate($dynamicRules);
        if($validated->fails()){
            return redirect()
                ->route('clientes.create')
                ->withErrors($validated)
                ->withInput();
        }
        Debugbar::info($validated);
        $cliente = $this->cliente->find($id);
        $updated = $cliente->update($validated);

        // bind a type of service in this client
        $service = $request['tiposervico_id'];

        OrdemServico::create(
            [
                'cliente_id' => $id,
                'tiposervico_id' => $service
            ]
        );

        // in case update sucecessfull
        if($updated){
            return redirect()
                ->route('ordens.create', ['id' => $id])
                ->with(
                    [
                        'client_success' => 'Cliente inserido com sucesso. Deseja iniciar uma ordem de serviço agora?',
                        
                    ]
                )
                ->withInput();
        } else {
            return redirect()
                ->route('clientes.create')
                ->withErrors(
                    [
                        'errors' => 'Falha no cadastramento.'
                    ]
                )
                ->withInput();
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
        $states = EstadoBrasil::orderBy('nome')->get();
        $services = TipoServico::orderBy('nome')->get();

        // Load only cities from the client state - reduce the amount of registers
        $cityIdBegin = Str::padRight($cliente->estadobrasil_id, 7,'0');
        $cityIdEnd = Str::padRight($cliente->estadobrasil_id, 7, '9');
        $cities = CidadeBrasil::whereBetween('id', [$cityIdBegin, $cityIdEnd])->get();
        
        return view('admin.cliente.edit', compact('cliente', 'services', 'states', 'cities'));             
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
        $cliente = $this->cliente->find($id);
        $tipoServico = $request['tipo_servico'];


        if($cliente === null){
            return redirect()
            ->route('clientes.edit')
            ->withErrors(
                [
                    'errors' => 'Cliente não encontrado no banco de dados. Cadastrá-lo novamente.'
                ]
            )
            ->withInput();
        } else if($request->method() === 'PATCH'){
            $dynamicRules = array();
            
            foreach($cliente->rules() as $input => $rule){
                if(array_key_exists($input, $request->all())){
                    $dynamicRules[$input] = $rule;
                }
            }  
            $request->validate($dynamicRules);
        } else {
            $request->validate($cliente->rules());

        }
            $update = $cliente->update($request->all());
 
            if($update){
            return redirect()
                ->route('clientes.last')
                ->with(['success' => 'Dados do cliente alterados com sucesso'])
                ->withInput();                
            } else {
                return redirect()
                    ->route('clientes.edit')
                    ->withErrors(['errors' => 'Falha na alteração. Tente novamente'])
                    ->withInput();
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

    public function loadCidades($estado)
    {        
        $cidades = DB::table('cidade_brasil')
                    ->select('cidade_brasil.id', 'cidade_brasil.nome')
                    ->where('estadobrasil_id',$estado)
                    ->orderBy('nome', 'ASC')
                    ->get();

        return view('admin.cliente.loadCidade', compact('cidades'));
    }

    public function loadCities($country)
    {
        $cities = DB::table('cidade')
                    ->select('cidade.id', 'cidade.nome')
                    ->where('pais_id', $country)
                    ->orderBy('nome')
                    ->get();

        return view('admin.cliente.loadCidade', compact('cities'));
    }

    public function inactive($id)
    {
        $cliente = Cliente::find($id);
        $inactive = 2;
        $update = $cliente->update(['statuscliente_id' => 2]);

        return redirect()
                ->route('home')
                ->with(['success' => 'Cliente inativado com sucesso'])
                ->withInput();
    }

    public function loadCards($id)
    {
        $comment = Comentarios::where('cliente_id', $id)->orderBy('created_at', 'desc')->get();
        $client = Cliente::find($id);
        return response()->json([$comment, $client]);
    }
}
