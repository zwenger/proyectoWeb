<?php

namespace App\Repositories;

use App\Models\TipoEmpleado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoEmpleadoRepository
 * @package App\Repositories
 * @version December 2, 2017, 11:33 am UTC
 *
 * @method TipoEmpleado findWithoutFail($id, $columns = ['*'])
 * @method TipoEmpleado find($id, $columns = ['*'])
 * @method TipoEmpleado first($columns = ['*'])
*/
class TipoEmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'especialidad',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoEmpleado::class;
    }
}
