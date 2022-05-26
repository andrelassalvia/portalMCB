<?php

namespace App\Http\Controllers\Apoio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;
use Illuminate\Support\Facades\DB;

class CitiesController extends Controller
{
    /**
     * method to show a list of cities out of Brazil
     * @param country from a list in database
     * @return cities to a view used to load html list
     */
    public function loadCities($country)
    {
        $cities = DB::table('cidade')
                    ->select('cidade.id', 'cidade.nome')
                    ->where('pais_id', $country)
                    ->orderBy('nome')
                    ->get();

        return view('apoio.cities.loadCidade', compact('cities'));
    }

    public function show($id)
    {
        $city = Cidade::find($id);
        return response()->json($city);
    }
}
