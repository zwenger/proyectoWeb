<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Maquina
 * @package App\Models
 * @version December 2, 2017, 12:03 pm UTC
 *
 * @property \App\Models\TipoMaquina tipoMaquina
 * @property string nroSerie
 * @property integer tipo_id
 */
class Maquina extends Model
{
    use SoftDeletes;

    public $table = 'maquinas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nroSerie',
        'tipo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nroSerie' => 'string',
        'tipo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nroSerie' => 'required',
        'tipo_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoMaquina()
    {
        return $this->belongsTo(\App\Models\TipoMaquina::class);
    }
    public function orden()
    {
        return $this->belongsTo(\App\Models\Orden::class);
    }
}
