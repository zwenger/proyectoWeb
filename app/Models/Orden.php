<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Orden
 * @package App\Models
 * @version December 2, 2017, 12:21 pm UTC
 *
 * @property \App\Models\Maquina maquina
 * @property \App\Models\Empleado empleado
 * @property \App\Models\Tarea tarea
 * @property string titulo
 * @property string descripcion
 * @property date fechaEmision
 * @property date fechaVencimiento
 * @property integer maquina_id
 * @property integer empleado_id
 * @property integer tarea_id
 */
class Orden extends Model
{
    use SoftDeletes;

    public $table = 'ordens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'descripcion',
        'fechaEmision',
        'fechaVencimiento',
        'maquina_id',
        'empleado_id',
        'tarea_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'descripcion' => 'string',
        'fechaEmision' => 'date',
        'fechaVencimiento' => 'date',
        'maquina_id' => 'integer',
        'empleado_id' => 'integer',
        'tarea_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'fechaEmision' => 'required',
        'fechaVencimiento' => 'required',
        'maquina_id' => 'required',
        'empleado_id' => 'required',
        'tarea_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function maquina()
    {
        return $this->belongsTo(\App\Models\Maquina::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function empleado()
    {
        return $this->belongsTo(\App\Models\Empleado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tarea()
    {
        return $this->belongsTo(\App\Models\Tarea::class);
    }
}
