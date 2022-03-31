<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoBrasil;

class Estado_Brasil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                "id"=> 12,
                "nome"=> "Acre",
                "code"=> "AC"
            ],
            [
                "id"=> 27,
                "nome"=> "Alagoas",
                "code"=> "AL"
            ],
            [
                "id"=> 16,
                "nome"=> "Amapá",
                "code"=> "AP"
            ],
            [
                "id"=> 13,
                "nome"=> "Amazonas",
                "code"=> "AM"
            ],
            [
                "id"=> 29,
                "nome"=> "Bahia",
                "code"=> "BA"
            ],
            [
                "id"=> 23,
                "nome"=> "Ceará",
                "code"=> "CE"
            ],
            [
                "id"=> 53,
                "nome"=> "Distrito Federal",
                "code"=> "DF"
            ],
            [
                "id"=> 32,
                "nome"=> "Espírito Santo",
                "code"=> "ES"
            ],
            [
                "id"=> 52,
                "nome"=> "Goiás",
                "code"=> "GO"
            ],
            [
                "id"=> 21,
                "nome"=> "Maranhão",
                "code"=> "MA"
            ],
            [
                "id"=> 51,
                "nome"=> "Mato Grosso",
                "code"=> "MT"
            ],
            [
                "id"=> 50,
                "nome"=> "Mato Grosso do Sul",
                "code"=> "MS"
            ],
            [
                "id"=> 31,
                "nome"=> "Minas Gerais",
                "code"=> "MG"
            ],
            [
                "id"=> 15,
                "nome"=> "Pará",
                "code"=> "PA"
            ],
            [
                "id"=> 25,
                "nome"=> "Paraíba",
                "code"=> "PB"
            ],
            [
                "id"=> 41,
                "nome"=> "Paraná",
                "code"=> "PR"
            ],
            [
                "id"=> 26,
                "nome"=> "Pernambuco",
                "code"=> "PE"
            ],
            [
                "id"=> 22,
                "nome"=> "Piauí",
                "code"=> "PI"
            ],
            [
                "id"=> 33,
                "nome"=> "Rio de Janeiro",
                "code"=> "RJ"
            ],
            [
                "id"=> 24,
                "nome"=> "Rio Grande do Norte",
                "code"=> "RN"
            ],
            [
                "id"=> 43,
                "nome"=> "Rio Grande do Sul",
                "code"=> "RS"
            ],
            [
                "id"=> 11,
                "nome"=> "Rondônia",
                "code"=> "RO"
            ],
            [
                "id"=> 14,
                "nome"=> "Roraima",
                "code"=> "RR"
            ],
            [
                "id"=> 42,
                "nome"=> "Santa Catarina",
                "code"=> "SC"
            ],
            [
                "id"=> 35,
                "nome"=> "São Paulo",
                "code"=> "SP"
            ],
            [
                "id"=> 28,
                "nome"=> "Sergipe",
                "code"=> "SE"
            ],
            [
                "id"=> 17,
                "nome"=> "Tocantins",
                "code"=> "TO"
            ]
        ];

        foreach ($states as $state) {
            EstadoBrasil::create($state);
        }
    }
}
