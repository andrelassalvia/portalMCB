<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comentarios;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'comentario' => 'nullable|string',
                'cliente_id' =>'integer|nullable',
                'created_at' => 'nullable'
            ]
        );

        $savedComment = DB::table('comentarios')->insert([
            'comentario' => $validated['comentario'],
            'cliente_id' => $validated['cliente_id'],
            'created_at' => $validated['created_at']
        ]);

        return response()->json($savedComment);
    }
}
