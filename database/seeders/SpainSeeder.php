<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class SpainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spainCities = [
            [
            'nome' => "Álava"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Ávila"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Albacete"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Alicante"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Almería"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Asturias"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Badajoz"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Baleares"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Barcelona"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Bilbao"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Burgos"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Cantabria"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Castellón"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Ceuta"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Ciudad Real"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Coruña"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Cuenca"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Cáceres"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Cádiz"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Córdoba"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Donostia"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Gerona"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Granada"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Huelva"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Huesca"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Jaén"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Las Palmas"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "León"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Lleida"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Lugo"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Madrid"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Melilla"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Murcia"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Málaga"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Navarra"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Orense"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Palencia"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Pontevedra"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Rioja"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Salamanca"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Segovia"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Sevilla"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Soria"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Tarragona"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Tenerife"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Teruel"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Toledo"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Valencia"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Valladolid"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Zamora"            ,
            'pais_id' => 244
            ],
            [
            'nome' => "Zaragoza"            ,
            ]
        ];

        foreach($spainCities as $city)
        {
            Cidade::create($city);
        }
    }
}
