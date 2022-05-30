<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Comentarios;
use App\Models\CidadeBrasil;
use App\Models\EstadoBrasil;
use App\Models\Fornecedor;
use App\Models\MaritalStatus;
use App\Models\Occupation;
use App\Models\OrdemServico;
use App\Models\Pais;
use App\Models\TipoServico;
use Barryvdh\Debugbar\Facade as Debugbar;
use App\Traits\redirectAlertsMessages;



class OrdemController extends Controller
{
    use redirectAlertsMessages;

    public function __construct(OrdemServico $ordem)
    {
        $this->ordem = $ordem;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cliente = Cliente::find($id);
        if(isset($cliente->ordens[0])){
            $ordemId = $cliente->ordens[0]->id;
        } else{
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Cadastrar uma demanda'],
                'Ok',
                'clientes.last'
            );
        }
        $ordem = $cliente->ordens[0];
        $occupations = Occupation::orderBy('nome')->get();
        $maritalStatus = MaritalStatus::orderBy('nome')->get();
        $estados = EstadoBrasil::orderBy('nome')->get();
        $countries = Pais::orderBy('nome')->get();        
        $demandas = TipoServico::orderBy('nome')->get();
        $providers = Fornecedor::all();
       
        return view(
            'admin.ordem.createCopy', 
            compact(
                'cliente', 
                'occupations', 
                'maritalStatus', 
                'estados',
                'countries', 
                'demandas',
                'ordemId',
                'ordem',
                'providers'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordem = $this->ordem->find($id);

        return response()->json($ordem);
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
        $ordem = $cliente->ordens[0];
                        
        return view('admin.ordem.edit', compact('ordem', 'cliente'));
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
        $ordem = $this->ordem->find($id);

        // validation rules for order info
        $dataForm = $request->validate(
            [
                'tiposervico_id' => 'integer|required',
                'fornecedor_id' => 'integer|nullable',
                'data_inicio' => 'date|nullable',
                'receita' => 'numeric|nullable',
                'custo' => 'numeric|nullable',
                'cotacao' => 'numeric|nullable',  
                'statusordem_id' => 'integer|nullable', 
                'classificacao_id' => 'integer|nullable'             
                ]
            ); 

        // validation rules for comment info
        $dataFormComment = $request->validate(
            [
                'cliente_id' => 'required|integer',
                'comentario' => 'nullable|string'
            ]
        );
        
        // update ordem table
        if ($dataForm) {
            
            $updateOrder = $ordem->update($dataForm);   
        }

        // create new comment in table
        if($dataFormComment){

            $createComment = Comentarios::create($dataFormComment);
        }
        
        if($updateOrder && $createComment) {
            return response()->json(
                array(
                    'order' => array(
                        'success' => true,
                        'message' => 'OS cadastrada com sucesso.'
                    ),   
                )                           
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

    public function updateStatus(Request $request, $id)
    {
        $ordem = $this->ordem->find($id);

        // validation rules for order info
        $dataForm = $request->validate(
            [                
                'statusordem_id' => 'integer|nullable'              
                ]
            ); 

        if ($dataForm) {
        
            $updateOrder = $ordem->update($dataForm);   
        }

        if($updateOrder){
            return response()->json($ordem);
        }
    }

    public function updateClassif(Request $request, $id)
    {
        $ordem = $this->ordem->find($id);

        // validation rules for order info
        $dataFormClassif = $request->validate(
            [                
                'classificacao_id' => 'nullable'              
                ]
            ); 

        if ($dataFormClassif) {
        
            $updateOrder = $ordem->update($dataFormClassif);   
        }

        if($updateOrder){
            return response()->json($ordem);
        }
    }
}
