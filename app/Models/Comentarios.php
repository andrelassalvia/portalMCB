<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Comentarios extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $fillable = [
        'cliente_id',
        'comentario'
    ];
    protected $casts = [
        'cliente_id' => 'integer',
        'comentario' => 'string',
    ];

    // Relationship
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    // Casting
    public function getCreatedAtAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('d-m-y');
        }
    }
}
