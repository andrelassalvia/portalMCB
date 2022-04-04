<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [ 
            ['nome' => 'Espanha'],
            ['nome' => 'Reino Unido'],
            ['nome' => 'França'],
            ['nome' => 'Portugal'],
            ['nome' => 'Itália'],
        ];

        foreach ($countries as $country) {
            Pais::create($country);
        }
    }
}
