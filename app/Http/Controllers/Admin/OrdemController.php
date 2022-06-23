<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cliente;
use App\Models\Comentarios;
use App\Models\OrdemServico;
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
    public function index(Request $request)
    {
        Session::put('ordersList', request()->fullUrl());
        $sortBy = 'created_at'; // Column to sort by
        $orderBy = 'desc'; // ascending or descending
        $perPage = 10;
        $q = null; // Search query

        $orders = OrdemServico::search($q)->orderBy($sortBy, $orderBy)->paginate($perPage);

        if($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if($request->has('perPage')) $perPage = $request->query('perPage');
        if($request->has('q')) $q = $request->query('q');

        return view(
            'admin.ordem.index', 
            compact('orders', 'sortBy', 'orderBy', 'perPage', 'q')
        );
    }

    /**
     * Show the form for creating a new service order
     * @param id from client because an order is binded with a client.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clienteId = session()->get('clienteId');
        session()->get('provider') ? $provider = session()->get('provider') : $provider = null;
        $demandas = TipoServico::orderBy('nome')->get();

        return view('admin.ordem.create', compact('clienteId', 'demandas', 'provider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->ordem->rules(), $this->ordem->errorMsg());
        $createOrder = OrdemServico::create($request->all());
        if($createOrder) {
            return redirectAlertsMessages::redirectSuccess(
                ['success' => 'Ordem inserida com sucesso'],
                'Ok',
                ['route' => session()->get('clientShowUrl')]
            );
        } else {
            return redirectAlertsMessages::redirectErrors(
                ['errors' => 'Falha na alteração. Tente novamente'],
                'Ok'
            );
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
