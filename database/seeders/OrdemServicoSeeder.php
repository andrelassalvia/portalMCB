<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\OrdemServico;
use Illuminate\Support\LazyCollection;

class OrdemServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = Cliente::cursor();
        
        foreach ($clientes as $key => $value) {
            OrdemServico::create(
                [
                    'cliente_id' => $key,
                    'tiposervico_id' => 1,
                ]
            );
        }
    }
}
