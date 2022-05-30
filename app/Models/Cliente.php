<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Traits\redirectAlertsMessages;


class Cliente extends Model
{
    use HasFactory, redirectAlertsMessages;

    //  ========== BASIC SETS ===============
    protected $table = 'cliente';
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'data_nascimento',
        'maritalstatus_id',
        'occupation_id',
        'firma_aberta',
        'cnh',
        'cpf',
        'certificacao_digital',
        'rg',
        'passaporte',
        'estadobrasil_id',
        'cidadebrasil_id',
        'pais_id',
        'cidade_id',
        'statuscliente_id',
        'rg_file',
        'passaporte_file',
        'cnh_file',
        'endereco_file'
    ];
    protected $casts = [
        'nome' => 'string',
        'telefone' => 'string',
        'email' => 'string',        
        'maritalstatus_id' => 'integer',
        'occupation_id' => 'integer',
        'firma_aberta' => 'boolean',
        'cnh' => 'boolean',
        'cpf' => 'boolean',
        'certificacao_digital' => 'boolean',
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
        'endereco_file' => 'string',
    ];

    //  ===============================================

    // ============ VALIDATION RULES ==================
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:50|string',
            'telefone' =>'required|unique:cliente,telefone,'.$this->id.'',
            'email' => 'email|nullable',
            'data_nascimento' => 'date|nullable',
            'maritalstatus_id' => 'integer|nullable',
            'occupation_id' => 'integer|nullable',
            'firma_aberta' => 'boolean',
            'cnh' => 'boolean',
            'cpf' => 'boolean',
            'certificacao_digital' => 'boolean',
            'rg' => 'boolean',
            'passaporte' => 'boolean',
            'estadobrasil_id' => 'integer|nullable',
            'cidadebrasil_id' => 'integer|nullable',
            'pais_id' => 'integer|nullable',
            'cidade_id' => 'integer|nullable',
            'statuscliente_id' => 'integer',
            'rg_file' => 'file|nullable',
            'passaporte_file' => 'file|nullable',
            'cnh_file' => 'file|nullable',
            'endereco_file' => 'file|nullable',                
        ];
    }
    //  ================================================

    // ========== GET AND SET ATTRIBUTES ================

    // Capital letter when retrieve name 
    public function getNomeAttribute($value)
    {
        return Str::of($value)->title();
    }

    public function setTelefoneAttribute($value)
    {
        // remove all characters but numbers to save telephone in DB
        $removed = preg_replace('/[^0-9]/', '', $value);
        $this->attributes['telefone'] = $removed;            
    }

    // Format telephone number when retrieving it
    public function getTelefoneAttribute($value)
    {
        $adjusted = Str::start($value, '(+');
        $adjusted =  Str::substrReplace($adjusted, ')',4,0);
        $adjusted =  Str::substrReplace($adjusted, ' ',5,0);
        $adjusted =   Str::substrReplace($adjusted, '-',11,0);

        return Str::substrReplace($adjusted, '-', 15,0);
    }

    // Format created_at date when retrieving it
    public function getCreatedAtAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('y-m-d');
        }
    }

    // Format updated_at date when retrieving it
    public function getUpdatedAtAttribute($value)
    {
        if($value) {

            return Carbon::parse($value)->format('y-m-d');
        }
    }
    // ================================================

    // ============ START RELATIONSHIP BLOCK ==========
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
        return $this->belongsTo(EstadoBrasil::class, 'estadobrasil_id', 'id');
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

    public function occupation()
    {
        return $this->hasOne(Occupation::class, 'occupation_id', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class, 'cliente_id', 'id');
    }
    // ================= END RELATIONSHIP BLOCK =====================

    // ================= SCOPE and LOCAL METHODS ====================
    
    // Retrieve clients with declared status
    public function scopeIndexStatus($query, $status)
    {
        return $query->whereIn('statuscliente_id', $status)
            ->with(['ordens.tipoServico', 'statusCliente'])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    // build array with partial rules to run with PATCH method
    public function partialRules($req)
    {
        $rules = array();
        foreach(Cliente::rules() as $input => $rule){
            if(array_key_exists($input, $req)){
                $rules[$input] = $rule;
            }
        }  
        return $rules;
    }

    // find client and update with request->all
    public function findAndUpdate($id, $request)
    {
        $cliente = Cliente::find($id);
        return $cliente->update($request);
    }

    // cleaning phone number to save
    public function cleanPhone($tel)
    {
        return preg_replace('/[^0-9]/','',$tel);
    }

    // redirect to error modal
    // public static function redirectErrors($error)
    // {
    //     return redirect()
    //     ->route('alerts.errors')
    //     ->withErrors($error)
    //     ->withInput();
    // }

    // // redirect to success modal
    // public static function redirectSuccess($success)
    // {
    //     return redirect()
    //     ->route('alerts.success')
    //     ->with($success)
    //     ->withInput();
    // }


    // Redirect as result of update
    // public static function responseFromUpdate($updated, $id)
    // {
    //     if($updated){
    //         return redirect()
    //             ->route('ordens.create', ['id' => $id])
    //             ->with(
    //                 [
    //                     'client_success' => 'Cliente inserido com sucesso. Deseja iniciar uma ordem de serviço agora?'
    //                 ]
    //             )
    //             ->withInput();
    //     } else {
    //         return redirect()
    //             ->route('alerts.errors')
    //             ->withErrors(
    //                 [
    //                     'errors' => 'Falha no cadastramento.'
    //                 ]
    //             )
    //             ->withInput();
    //     }
    // }

    // ===============================================================
}
