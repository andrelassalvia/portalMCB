<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'pais';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'pais_id', 'id');
    }

    public function cidades()
    {
        return $this->hasMany(Cidade::class, 'pais_id', 'id');
    }
}
