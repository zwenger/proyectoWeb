<?php

namespace App\Repositories;

use App\Models\Empleado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version December 2, 2017, 11:54 am UTC
 *
 * @method Empleado findWithoutFail($id, $columns = ['*'])
 * @method Empleado find($id, $columns = ['*'])
 * @method Empleado first($columns = ['*'])
*/
class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cuit',
        'telefono',
        'email',
        'domicilio',
        'tipo_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Empleado::class;
    }
}
