<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentarios;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    /**
    * Method to store a comment linked with a client
    * @param Request 
    * @return response as json to a ajax within a js
    */
    public function store(Request $request)
    {
        // validation rules
        $validated = $request->validate(
            [
                'comentario' => 'nullable|string',
                'cliente_id' =>'integer|nullable',
                'created_at' => 'nullable'
            ]
        );

        // save in database
        $savedComment = DB::table('comentarios')->insert([
            'comentario' => $validated['comentario'],
            'cliente_id' => $validated['cliente_id'],
            'created_at' => $validated['created_at']
        ]);

        return response()->json($savedComment);
    }

    /**
     * method to find a comment linked with a client
     * @param id from client
     * @return response as json with comment and client data
     */
    public function show($id)
    {
        $comment = Comentarios::where('cliente_id', $id)->orderBy('created_at', 'desc')->get();
        $client = Cliente::find($id);
        return response()->json([$comment, $client]);
    }
}

