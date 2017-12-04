<?php

namespace App\Repositories;

use App\Models\Orden;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdenRepository
 * @package App\Repositories
 * @version December 2, 2017, 12:21 pm UTC
 *
 * @method Orden findWithoutFail($id, $columns = ['*'])
 * @method Orden find($id, $columns = ['*'])
 * @method Orden first($columns = ['*'])
*/
class OrdenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'fechaEmision',
        'fechaVencimiento',
        'maquina_id',
        'empleado_id',
        'tarea_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orden::class;
    }
}
