<?php

namespace App\Http\Controllers\Apoio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CitiesController extends Controller
{
    public function show($id)
    {
        $city = Cidade::find($id);
        return response()->json($city);
    }
}
