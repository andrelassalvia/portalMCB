<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadeBrasil extends Model
{
    use HasFactory;

    // ========= BASIC SETS ========================= //
    protected $table = 'cidade_brasil';
    protected $fillable = ['nome', 'estadobrasil_id'];
    protected $casts = [
        'nome' => 'string',
        'estadobrasil_id' => 'integer'
    ];

    // =========== RELATIONSHIPS ==================== //
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'cidadebrasil_id', 'id');
    }

    public function estadoBrasil()
    {
        return $this->belongsTo(EstadoBrasil::class, 'estadobrasil_id', 'id');
    }

    public function fornecedores()
    {
        return $this->hasMany(Fornecedor::class, 'cidadebrasil_id', 'id');
    }
}
