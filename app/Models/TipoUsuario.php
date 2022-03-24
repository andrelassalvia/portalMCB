<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $table = 'tipo_usuario';
    protected $fillable = ['nome'];
    protected $casts = [
        'nome' => 'string',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'tipousuario_id', 'id');
    }
}
