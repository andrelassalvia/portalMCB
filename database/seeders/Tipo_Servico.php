<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoServico;

class Tipo_Servico extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['nome' => 'Procuração'],
            ['nome' => 'Certidões'],
            ['nome' => 'E-Consular'],
            ['nome' => 'Separação'],
            ['nome' => 'Casamento'],
            ['nome' => 'Autorização de Viagem'],
            ['nome' => 'Outros']
        ];

        foreach ($services as $service) {
            TipoServico::create($service);
        }
    }
}
