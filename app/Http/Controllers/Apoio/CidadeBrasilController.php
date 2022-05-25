<?php

namespace App\Http\Controllers\Apoio;

use App\Http\Controllers\Controller;
use App\Models\CidadeBrasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CidadeBrasilController extends Controller
{
    /**
     * Display a listing of brazilian
     * cities associated with a state.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadCidades($estado)
    {
        $cidades = DB::table('cidade_brasil')
            ->select('cidade_brasil.id', 'cidade_brasil.nome')
            ->where('estadobrasil_id', $estado)
            ->orderBy('nome', 'asc')
            ->get();

            return view('apoio.cities.loadCidade', compact('cidades'));
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cidadeBrasil = CidadeBrasil::find($id);

        return response()->json($cidadeBrasil);
    }
}
