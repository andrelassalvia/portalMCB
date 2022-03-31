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
       $service = new TipoServico();
       $service->insert(['nome' => 'Procuração']);
       $service->insert(['nome' => 'Certidões']);
       $service->insert(['nome' => 'E-Consular']);
       $service->insert(['nome' => 'Separação']);
       $service->insert(['nome' => 'Casamento']);
       $service->insert(['nome' => 'Autorização de Viagem']);
       $service->save();
    }
}
