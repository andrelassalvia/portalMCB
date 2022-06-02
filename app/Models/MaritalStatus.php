<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    //  ========== BASIC SETS =============== //
    protected $table = 'marital_status';
    protected $fillable = ['nome'];
    protected $casts = ['nome' => 'string'];

    //  ========== VALIDATION RULES =============== //
    public function rules(){
        return ['nome' => 'required|min:3|max:100|string'];
    }

    //  ========== RELATIONSHIPS =============== //
    
}
