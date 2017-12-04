<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoEmpleado
 * @package App\Models
 * @version December 2, 2017, 11:33 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Empleado
 * @property string especialidad
 * @property string descripcion
 */
class TipoEmpleado extends Model
{
    use SoftDeletes;

    public $table = 'tipo_empleados';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'especialidad',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'especialidad' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'especialidad' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empleados()
    {
        return $this->hasMany(\App\Models\Empleado::class);
    }
}
