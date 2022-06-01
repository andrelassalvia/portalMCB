<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusCliente;

class Status_Cliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $status = new StatusCliente();
        // $status->insert(['nome' => 'Potencial']);
        // $status->insert(['nome' => 'Inativo']);
        // $status->insert(['nome' => 'Ordem em Andamento']);
        // $status->insert(['nome' => 'Ordem Finalizada']);
        // $status->save();
        $status = [
            ['nome' => 'Potencial'],
            ['nome' => 'Inativo'],
            ['nome' => 'Ordem em Andamento'],
            ['nome' => 'Ordem Finalizada'],
        ];

        foreach ($status as $value) {
            StatusCliente::create($value);
        }
    }
}
