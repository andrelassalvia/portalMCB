<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServico extends Model
{
    use HasFactory;

    protected $table = 'tipo_servico';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function ordensServico()
    {
        return $this->hasMany(OrdemServico::class, 'tiposervico_id', 'id');
    }
}
