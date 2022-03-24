<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';
    protected $fillable = [
        'nome',
        'nome_contato',
        'telefone',
        'email',
        'zap',
        'estadobrasil_id',
        'cidadebrasil_id',
        'classificacao_id'
    ];
    protected $casts = [
        'nome' => 'string',
        'nome_contato' => 'string',
        'telefone' => 'string',
        'email' => 'string',
        'zap' => 'string',
        'estadobrasil_id' => 'integer',
        'cidadebrasil_id' => 'integer',
        'classificacao_id' => 'integer'
    ];

    public function ordensServico()
    {
        return $this->hasMany(OrdemServico::class, 'fornecedor_id', 'id');
    }

    public function estadoBrasil()
    {
        return $this->belongsTo(EstadoBrasil::class, 'estadobrasil_id', 'id');
    }

    public function cidadeBrasil()
    {
        return $this->belongsTo(CidadeBrasil::class, 'cidadebrasil_id', 'id');
    }

    public function classificacao()
    {
        return $this->belongsTo(Classificacao::class, 'classificacao_id', 'id');
    }


}
