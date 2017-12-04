<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoMaquina
 * @package App\Models
 * @version December 2, 2017, 12:01 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Maquina
 * @property string tipo
 * @property string descripcion
 */
class TipoMaquina extends Model
{
    use SoftDeletes;

    public $table = 'tipo_maquinas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tipo',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipo' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function maquinas()
    {
        return $this->hasMany(\App\Models\Maquina::class);
    }
}
