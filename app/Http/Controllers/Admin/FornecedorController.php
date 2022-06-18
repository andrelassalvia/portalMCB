<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Cliente;
use App\Models\EstadoBrasil;
use App\Models\CidadeBrasil;
use App\Models\OrdemServico;
use Illuminate\Support\Str;
use App\Traits\redirectAlertsMessages;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    use redirectAlertsMessages;

    public function __construct(Fornecedor $fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Fornecedor::with(['estadoBrasil', 'cidadeBrasil'])->get();
        return view('admin.fornecedor.index', compact('providers'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = EstadoBrasil::orderBy('nome', 'asc')->get();
        $cidades = CidadeBrasil::where('id', 1100015)->get();
        return view('admin.fornecedor.create', compact('estados', 'cidades'));
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
            $this->fornecedor->partialRules($request->all()), 
        $this->fornecedor->errorMsg()
        );

        $fornecedor = Fornecedor::firstOrCreate($validated);
        if($fornecedor){
            if($request->ordem){
                return redirect()
                    ->route(
                        'providers.select',
                        [$fornecedor->id, $request->ordem]
                    );
            } else {
                return redirectAlertsMessages::redirectSuccess(
                    ['success' => 'Fornecedor gravado com sucesso'],
                    'Ok',
                    ['route' => 'fornecedores.index']
                );
            }
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
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        $estados = EstadoBrasil::orderBy('nome', 'asc')->get();

        // Load only cities from the client state - reduce the amount of registers
        $cityIdBegin = Str::padRight($fornecedor['estadobrasil_id'], 7,'0');
        $cityIdEnd = Str::padRight($fornecedor['estadobrasil_id'], 7, '9');
        $cidades = CidadeBrasil::whereBetween('id', [$cityIdBegin, $cityIdEnd])->get();

        return view('admin.fornecedor.edit', compact('fornecedor', 'estados', 'cidades'));
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
        $validated = $request->validate($this->fornecedor->partialRules($request->all()));
        $fornecedor = Fornecedor::find($id);
        $fornecedor->update($validated);

        return redirect()->route('fornecedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::with(['ordensServico'])->find($id);
        $fornecedor->delete();
    }
}
