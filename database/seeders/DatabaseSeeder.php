<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // Estado_Brasil::class,
            // Cidade_Brasil::class,
            // Tipo_Servico::class,
            Status_Cliente::class
        ]);        
    }
}
