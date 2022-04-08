<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class OrdemServico extends Model
{
    use HasFactory;

    protected $table = 'ordem_servico';
    protected $fillable = [
        'cliente_id',
        'tiposervico_id',
        'fornecedor_id',
        'statusordem_id',
        'data_inicio',
        'data_fim',
        'receita',
        'custo',
        'cotacao',
        'comentario'
    ];
    protected $casts = [
        'cliente_id' => 'integer',
        'tiposervico_id' => 'integer',
        'fornecedor_id' => 'integer',
        'statusordem_id' => 'integer',
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'receita' => 'float',
        'custo' => 'float',
        'cotacao' => 'float',
        'comentario' => 'string'
    ];

    public function getDataInicioAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('d-m-y');
        }
    }

    public function tipoServico()
    {
        return $this->belongsTo(TipoServico::class, 'tiposervico_id', 'id');
    }

    public function statusOrdem()
    {
        return $this->belongsTo(StatusOrdem::class, 'statusordem_id', 'id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
