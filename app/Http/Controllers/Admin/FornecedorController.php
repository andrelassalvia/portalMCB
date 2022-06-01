<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\EstadoBrasil;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Fornecedor::with(['estadoBrasil'])
            ->orderBy('classificacao_id', 'desc')
            ->get();
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
        return view('admin.fornecedor.modal.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $validated = $request->validate([
            'nome' => array(
                'required',
                'min:3',
                'max:40',
                'regex:/[a-zA-Z0-9]/'
            ),
            'nome_contato' => array(
                'nullable',
                'min:3',
                'max:40',
                'regex:/[a-zA-Z]/'
            ),
            'telefone' => array(
                'required',
                'regex:/[+0-9]/',                
            ),
            'email' => 'email|nullable',
            'zap' => array(
                'nullable',
                'regex:/[+0-9]/',                
            ),
            'estadobrasil_id' => 'nullable|integer',
            'cidadebrasil_id' => 'nullable|integer', 
            'classificacao_id' => 'nullable|integer',           
        ]);
                
        $check = DB::table('fornecedor')
            ->where('telefone', $validated['telefone'])
            ->first();
        
        if($check){
            return response()->json([
                'error' => 'Fornecedor já cadastrado'
            ]);                        
        } else {
            $save = DB::table('fornecedor')->insert([
                'nome' => $validated['nome'],
                'nome_contato' => $validated['nome_contato'],
                'telefone' => $validated['telefone'],
                'email' => $validated['email'],
                'zap' => $validated['zap'],
                'estadobrasil_id' => $validated['estadobrasil_id'],
                'cidadebrasil_id' => $validated['cidadebrasil_id'],
                'classificacao_id' => $validated['classificacao_id']
            ]);

            // if($save){
            //     return response()->json([
            //         'success' => 'Fornecedor gravado com sucesso'
            //     ]);
            // } else {
            //     return response()->json([
            //         'error' => 'Falha no cadastramento'
            //     ]);
            // }
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
        //
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
}
