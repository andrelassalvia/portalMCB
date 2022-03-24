<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoBrasil extends Model
{
    use HasFactory;

    protected $table = 'estado_brasil';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'estadobrasil_id', 'id');
    }

    public function fornecedores()
    {
        return $this->hasMany(Fornecedor::class, 'estadobrasil_id', 'id');
    }

    public function cidadesBrasil()
    {
        return $this->hasMany(CidadeBrasil::class, 'estadobrasil_id', 'id');
    }    
}
