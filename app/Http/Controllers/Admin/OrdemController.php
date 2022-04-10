<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrdemServico;
use App\Models\CidadeBrasil;
use App\Models\EstadoBrasil;
use App\Models\Pais;

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
        $ordem = $this->ordem->find($id);
        $dataForm = $request->validate(
            [
                'tiposervico_id' => 'integer|required',
                'fornecedor_id' => 'integer|nullable',
                'data_inicio' => 'nullable',
                'receita' => 'numeric|nullable',
                'custo' => 'numeric|nullable',
                'cotacao' => 'numeric|nullable',
                'comentario' => 'max:1000|string|nullable'
            ]
        );
        
        $update = $ordem->update($dataForm);       
        if($update) {
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
}
