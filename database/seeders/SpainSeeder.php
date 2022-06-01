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
            'pais_id' => 1
            ],
            [
            'nome' => "Ávila"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Albacete"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Alicante"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Almería"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Asturias"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Badajoz"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Baleares"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Barcelona"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Bilbao"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Burgos"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Cantabria"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Castellón"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Ceuta"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Ciudad Real"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Coruña"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Cuenca"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Cáceres"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Cádiz"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Córdoba"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Donostia"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Gerona"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Granada"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Huelva"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Huesca"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Jaén"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Las Palmas"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "León"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Lleida"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Lugo"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Madrid"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Melilla"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Murcia"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Málaga"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Navarra"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Orense"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Palencia"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Pontevedra"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Rioja"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Salamanca"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Segovia"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Sevilla"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Soria"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Tarragona"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Tenerife"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Teruel"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Toledo"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Valencia"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Valladolid"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Zamora"            ,
            'pais_id' => 1
            ],
            [
            'nome' => "Zaragoza"            ,
            'pais_id' => 1
            ]
        ];

        foreach($spainCities as $city)
        {
            Cidade::create($city);
        }
    }
}
