<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empleado
 * @package App\Models
 * @version December 2, 2017, 11:54 am UTC
 *
 * @property \App\Models\TipoEmpleado tipoEmpleado
 * @property string nombre
 * @property string cuit
 * @property integer telefono
 * @property string email
 * @property string domicilio
 * @property integer tipo_id
 */
class Empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'cuit',
        'telefono',
        'email',
        'domicilio',
        'tipo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'cuit' => 'string',
        'telefono' => 'integer',
        'email' => 'string',
        'domicilio' => 'string',
        'tipo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'cuit' => 'required',
        'tipo_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoEmpleado()
    {
        return $this->belongsTo(\App\Models\TipoEmpleado::class);
    }

    public function orden()
    {
        return $this->belongsTo(\App\Models\Orden::class);
    }
}
