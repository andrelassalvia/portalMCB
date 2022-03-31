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
        $status = new StatusCliente();
        $status->insert(['nome' => 'Ativo']);
        $status->insert(['nome' => 'Inativo']);
        $status->save();
    }
}
