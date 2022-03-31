<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\TipoServico;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\OrdemServico;
use Carbon\Carbon;

class ClienteController extends Controller
{
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
                'comentario' => 'nullable|min:3|max:200'
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
        
        return view ('admin.cliente.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function inactive($id)
    {
        $cliente = Cliente::find($id);
        $inactive = 2;
        $update = $cliente->update(['statuscliente_id' => 2]);

        return redirect()->route('home')->with(['success' => 'Cliente inativado com sucesso'])->withInput();
    }
}
