<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $table = 'marital_status';
    protected $fillable = [
        'nome'
    ];
    protected $casts = [
        'nome' => 'string'
    ];
}
