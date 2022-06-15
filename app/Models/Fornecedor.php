<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fornecedor extends Model
{
    use HasFactory;

    // ======= BASICS SETS ====== //
    protected $table = 'fornecedor';
    protected $fillable = [
        'nome',
        'nome_contato',
        'telefone',
        'email',
        'zap',
        'estadobrasil_id',
        'cidadebrasil_id',
    ];
    protected $casts = [
        'nome' => 'string',
        'nome_contato' => 'string',
        'telefone' => 'string',
        'email' => 'string',
        'zap' => 'string',
        'estadobrasil_id' => 'integer',
        'cidadebrasil_id' => 'integer',
    ];

    // ===== VALIDATION RULES ===== //
    public function rules()
    {
        return [
            'nome' => array(
                'nullable',
                'min:3',
                'max:40',
                'regex:/[a-zA-Z0-9]/'
            ),
            'nome_contato' => array(
                'nullable',
                'min:3',
                'max:40',
                'regex:/[a-zA-Z]/'
            ),
            'telefone' => array(
                'required',
                'unique:fornecedor,telefone,'.$this->id.'',
                'regex:/[+0-9]/',                
            ),
            'email' => 'email|nullable',
            'zap' => array(
                'nullable',
                'regex:/[+0-9]/',                
            ),
            'estadobrasil_id' => 'required|integer',
            'cidadebrasil_id' => 'required|integer', 
        ];
    }

    public function errorMsg()
    {
        return [
            'estadobrasil_id.required' => 'O campo Estado é obrigatório',
            'cidadebrasil_id.required' => 'O campo Cidade é obrigatório'
        ];
    }


    // ===== RELATIONSHIPS ===== //
    public function ordensServico()
    {
        return $this->hasMany(OrdemServico::class, 'fornecedor_id', 'id');
    }

    public function estadoBrasil()
    {
        return $this->belongsTo(EstadoBrasil::class, 'estadobrasil_id', 'id');
    }

    public function cidadeBrasil()
    {
        return $this->belongsTo(CidadeBrasil::class, 'cidadebrasil_id', 'id');
    }

    // ========== GET AND SET ATTRIBUTES ================
    public function setTelefoneAttribute($value)
    {
        // remove all characters but numbers to save telephone in DB
        $removed = preg_replace('/[^0-9]/', '', $value);
        $this->attributes['telefone'] = $removed;            
    }

    public function setZapAttribute($value)
    {
        // remove all characters but numbers to save telephone in DB
        $removed = preg_replace('/[^0-9]/', '', $value);
        $this->attributes['zap'] = $removed;            
    }

    public function getNomeAttribute($value)
    {
        return Str::of($value)->title();
    }

    public function getNomeContatoAttribute($value)
    {
        return Str::of($value)->title();
    }

    // Format telephone number when retrieving it
    public function getTelefoneAttribute($value)
    {
        if($value){
            return Fornecedor::telAndZapNumbers($value);
        }
    }

    // Format telephone number when retrieving it
    public function getZapAttribute($value)
    {
        if($value){
            return Fornecedor::telAndZapNumbers($value);
        }
    }

     // ===== METHODS ===== //

    // build array with partial rules to run with PATCH method
    public function partialRules($req)
    {
        $rules = array();
        foreach(Fornecedor::rules() as $input => $rule){
            if(array_key_exists($input, $req)){
                $rules[$input] = $rule;
            }
        }  
        return $rules;
    }

    protected function telAndZapNumbers($value)
    {
        $adjusted = Str::start($value, '(+');
        $adjusted =  Str::substrReplace($adjusted, ')',4,0);
        $adjusted =  Str::substrReplace($adjusted, ' ',5,0);
        $adjusted =   Str::substrReplace($adjusted, '-',11,0);

        return Str::substrReplace($adjusted, '-', 15,0);
    }
}
