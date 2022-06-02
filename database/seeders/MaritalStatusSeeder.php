<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaritalStatus;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatus = [
            ['nome' => 'Casado'],
            ['nome' => 'Solteiro'],
            ['nome' => 'Separado'],
            ['nome' => 'Viúvo'],
            ['nome' => 'Outro'],
        ];

        foreach ($maritalStatus as $value) {
            MaritalStatus::create($value);
        }
    }
}
