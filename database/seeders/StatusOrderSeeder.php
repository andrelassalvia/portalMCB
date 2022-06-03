<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusOrdem;

class StatusOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['nome' => 'Autorizada a OS'],
            ['nome' => 'Documentos'],
            ['nome' => 'Certificação Digital'],
            ['nome' => 'Minuta'],
            ['nome' => 'Video Conferência'],
            ['nome' => 'Procuração'],
        ];
        
        foreach ($status as $key => $value) {
            StatusOrdem::create($value);
        }
    }
}
