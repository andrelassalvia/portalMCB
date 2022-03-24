<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCliente extends Model
{
    use HasFactory;

    protected $table = 'status_cliente';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'statuscliente_id', 'id');
    }
}
