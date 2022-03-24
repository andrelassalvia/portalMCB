<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusOrdem extends Model
{
    use HasFactory;

    protected $table = 'status_ordem';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function ordensServico()
    {
        return $this->hasMany(OrdemServico::class, 'statusordem_id', 'id');
    }
}
