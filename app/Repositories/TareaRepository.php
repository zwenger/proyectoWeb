<?php

namespace App\Repositories;

use App\Models\Tarea;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TareaRepository
 * @package App\Repositories
 * @version December 2, 2017, 12:06 pm UTC
 *
 * @method Tarea findWithoutFail($id, $columns = ['*'])
 * @method Tarea find($id, $columns = ['*'])
 * @method Tarea first($columns = ['*'])
*/
class TareaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'periodo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tarea::class;
    }
}
