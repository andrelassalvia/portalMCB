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
