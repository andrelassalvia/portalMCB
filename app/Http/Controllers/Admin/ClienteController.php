<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\Pais;
use App\Models\TipoServico;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\OrdemServico;
use Carbon\Carbon;

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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = EstadoBrasil::orderBy('nome')->get();
        $cities = CidadeBrasil::all();
        $services = TipoServico::orderBy('nome')->get();
        return view ('admin.cliente.create', compact('states', 'cities', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nome' => array(
                    'required',
                    'min:3',
                    'max:40',
                    'regex:/[a-zA-Z]/'
                ),
                'telefone' => array(
                    'required',
                    'regex:/[+0-9]/',
                    'size:14'

                ),
                'tipo_servico' => 'required',
                'estado_brasil' => 'nullable',
                'cidade_brasil' => 'nullable',
                'firma_aberta' => 'boolean',
                'cnh' => 'boolean',
                'cpf' => 'boolean',
                'certificacao_digital' => 'boolean',
                'comentario' => 'nullable|min:3|max:1000'
            ]
        );

        
        
        // Check Database
        $tel = $validated['telefone'];
        $check = Cliente::where('telefone', $tel)->get()->first();
        if($check) {
            return redirect()
                ->route('clientes.create')
                ->withErrors(['errors' => 'Cliente já cadastrado'])
                ->withInput();
        } else {

            DB::table('cliente')->insert([
                'nome' => $validated['nome'],
                'telefone' => $validated['telefone'],
                'firma_aberta' => $validated['firma_aberta'],
                'cnh' => $validated['cnh'],
                'cpf' => $validated['cpf'],
                'certificacao_digital' => $validated['certificacao_digital'],
                'estadobrasil_id' => $validated['estado_brasil'],
                'cidadebrasil_id' => $validated['cidade_brasil'],
                'comentario' => $validated['comentario'],
                'created_at' => Carbon::now()->toDateTimeString()
            ]);

            $cliente = new Cliente();
            $clienteId = $cliente->count();    
                
           
            DB::table('ordem_servico')->insert([
                'tiposervico_id' => $validated['tipo_servico'],
                'cliente_id' => $clienteId
            ]);
            
            return redirect()
                ->route('home')
                ->with(['success' => 'Cliente cadastrado com sucesso'])
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
        $ordem = $cliente->ordens()->get();        
        $states = EstadoBrasil::orderBy('nome')->get();
        $cities = CidadeBrasil::all();
        $countries = Pais::orderBy('nome')->get();
        $demandas = TipoServico::orderBy('nome')->get();
        $today = Carbon::now()->parse()->format('Y-m-d');

        return 
            view ('admin.ordem.create',   compact(
                'states', 
                'cities', 
                'countries', 
                'cliente', 
                'demandas', 
                'today',
                'ordem'
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
        $cliente = $this->cliente->find($id);
        $dataForm = $request->validate(
            [
                'nome' => 'required|min:3|max:50|string',
                'telefone' =>'required',
                'email' => 'email|nullable',
                'data_nascimento' => 'date|nullable',
                'firma_aberta' => 'boolean',
                'cnh' => 'boolean',
                'cpf' => 'boolean',
                'certificacao_digital' => 'boolean',
                'rg' => 'boolean',
                'passaporte' => 'boolean',
                'estadobrasil_id' => 'integer|nullable',
                'cidadebrasil_id' => 'integer|nullable',
                'pais_id' => 'integer|nullable',
                'cidade_id' => 'integer|nullable',
                'rg_file' => 'file|nullable',
                'passaporte_file' => 'file|nullable',
                'cnh_file' => 'file|nullable',
                'endereco_file' => 'file|nullable',
                'comentario' => 'max:1000|string|nullable'
            ]
        );
        // dd($dataForm);   
        $cliente->update($dataForm);             
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

        return response()->json($cidades);

    }

    public function loadCities($country)
    {
        $cities = DB::table('cidade')
                    ->select('cidade.id', 'cidade.nome')
                    ->where('pais_id', $country)
                    ->orderBy('nome')
                    ->get();

        return response()->json($cities);

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
        $cliente = Cliente::find($id);
        return response()->json($cliente);
    }
}
