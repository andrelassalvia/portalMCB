<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $table = 'occupation';
    protected $fillable = [
        'nome'
    ];
    protected $casts = [
        'nome' => 'string'
    ];

    public function clientes(){
        return $this->belongsTo(Cliente::class, 'occupation_id', 'id');
    }

}
