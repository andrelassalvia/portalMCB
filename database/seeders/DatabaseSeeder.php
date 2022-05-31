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
        // \App\Models\Cliente::factory(1000)->create();
        $this->call([
            // Estado_Brasil::class,
            // Cidade_Brasil::class,
            // Tipo_Servico::class
            // Status_Cliente::class,
            // PaisSeeder::class,
            UnitedKingdomSeeder::class,
            // SpainSeeder::class,
            // FranceSeeder::class,
            // PortugalSeeder::class,
            // ItalySeeder::class,
            // OccupationSeeder::class
        ]);        
    }
}

