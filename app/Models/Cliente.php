<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'data_nascimento',
        'firma_aberta',
        'cnh',
        'cpf',
        'rg',
        'passaporte',
        'estadobrasil_id',
        'cidadebrasil_id',
        'pais_id',
        'cidade_id',
        'statuscliente_id',
        'rg_file',
        'comentario',
        'passaporte_file',
        'cnh_file',
        'endereco_file'
    ];
    protected $casts = [
        'nome' => 'string',
        'telefone' => 'string',
        'email' => 'string',
        'data_nascimento' => 'date',
        'firma_aberta' => 'boolean',
        'cnh' => 'boolean',
        'cpf' => 'boolean',
        'rg' => 'boolean',
        'passaporte' => 'boolean',
        'estadobrasil_id' => 'integer',
        'cidadebrasil_id' => 'integer',
        'pais_id' => 'integer',
        'cidade_id' => 'integer',
        'statuscliente_id' => 'integer',
        'rg_file' => 'string',
        'passaporte_file' => 'string',
        'cnh_file' => 'string',
        'endereco_file' => 'string'
    ];

    public function getNomeAttribute($value)
    {
        return Str::of($value)->title();
    }

    public function getTelefoneAttribute($value)
    {
        $adjusted = Str::start($value, '(');
        $adjusted =  Str::substrReplace($adjusted, ')',4,0);
        $adjusted =  Str::substrReplace($adjusted, ' ',5,0);
        $adjusted =   Str::substrReplace($adjusted, '-',11,0);
        return Str::substrReplace($adjusted, '-', 15,0);

    }

    public function getCreatedAtAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('d-m-y');
        }
    }

    public function statusCliente()
    {
        return $this->belongsTo(StatusCliente::class, 'statuscliente_id', 'id');
    }

    public function ordens()
    {
        return $this->hasMany(OrdemServico::class, 'cliente_id', 'id');
    }

    public function estadoBrasil()
    {
        return $this->belongsTo(EsatadoBrasil::class, 'estadobrasil_id', 'id');
    }

    public function cidadeBrasil()
    {
        return $this->belongsTo(CidadeBrasil::class, 'cidadebrasil_id', 'id');        
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'cidade_id', 'id');
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'id');
    }
}
