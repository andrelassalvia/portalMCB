<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidade';
    protected $fillable = ['nome', 'pais_id'];
    protected $casts = [
        'nome' => 'string',
        'pais_id' => 'integer'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'cidade_id', 'id');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'id');
    }
}
