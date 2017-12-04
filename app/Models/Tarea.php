<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tarea
 * @package App\Models
 * @version December 2, 2017, 12:06 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Orden
 * @property string titulo
 * @property string descripcion
 * @property integer periodo
 */
class Tarea extends Model
{
    use SoftDeletes;

    public $table = 'tareas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'descripcion',
        'periodo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'descripcion' => 'string',
        'periodo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'descripcion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ordens()
    {
        return $this->hasMany(\App\Models\Orden::class);
    }
}
