<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class OrdemServico extends Model
{
    use HasFactory;

    //  ========== BASIC SETS ===============
    protected $table = 'ordem_servico';
    protected $fillable = [
        'cliente_id',
        'tiposervico_id',
        'fornecedor_id',
        'statusordem_id',
        'classificacao_id',
        'data_inicio',
        'data_fim',
        'receita',
        'custo',
        'cotacao',
     
    ];
    protected $casts = [
        'cliente_id' => 'integer',
        'tiposervico_id' => 'integer',
        'fornecedor_id' => 'integer',
        'statusordem_id' => 'integer',
        'classificacao_id' => 'integer',
        'data_inicio' => 'date',
        'data_fim' => 'date',
        'receita' => 'float',
        'custo' => 'float',
        'cotacao' => 'float',

    ];
    //  ===============================================

    // ============ VALIDATION RULES ==================
    public function rules()
    {
        return [
            'cliente_id' => 'required|integer',
            'tiposervico_id' =>'required|integer',
            'fornecedor_id' =>'integer|nullable',
            'statusordem_id' => 'integer|nullable',
            'classificacao_id' => 'integer|nullable',
            'data_inicio' => 'date|nullable',
            'data_fim' => 'date|nullable',
            'receita' => 'numeric|nullable',
            'custo' => 'numeric|nullable',
            'cotacao' => 'numeric|nullable'
        ];
    }

    public function errorMsg()
    {
        return [
            'tiposervico_id.required' => 'O campo demanda é obrigatório'
        ];
    }
    //  ================================================

    // ========== GET AND SET ATTRIBUTES ================
    public function getDataInicioAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('d-m-y');
        }
    }
    // ================================================

    // ============ START RELATIONSHIP BLOCK ==========
    public function tipoServico()
    {
        return $this->belongsTo(TipoServico::class, 'tiposervico_id', 'id');
    }

    public function statusOrdem()
    {
        return $this->belongsTo(StatusOrdem::class, 'statusordem_id', 'id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    public function classificacao()
    {
        return $this->belongsTo(Classificacao::class, 'classificacao_id', 'id');
    }
    // ================= END RELATIONSHIP BLOCK =====================

    // ================= SCOPE and LOCAL METHODS ====================

        // build array with partial rules to run with PATCH method
        public function partialRules($req)
        {
            $rules = array();
            foreach(OrdemServico::rules() as $input => $rule){
                if(array_key_exists($input, $req)){
                    $rules[$input] = $rule;
                }
            }  
            return $rules;
        }
}
