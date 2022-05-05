<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    use HasFactory;

    protected $table = 'classificacao';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function ordens()
    {
        return $this->hasMany(OrdemServico::class, 'classificacao_id', 'id');
    }
}
