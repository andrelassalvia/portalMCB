<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdemServico;
use App\Models\Cliente;
use App\Models\Comentarios;

class OrdemController extends Controller
{

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
    public function create()
    {
        
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
