<?php

namespace App\Repositories;

use App\Models\TipoMaquina;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoMaquinaRepository
 * @package App\Repositories
 * @version December 2, 2017, 12:01 pm UTC
 *
 * @method TipoMaquina findWithoutFail($id, $columns = ['*'])
 * @method TipoMaquina find($id, $columns = ['*'])
 * @method TipoMaquina first($columns = ['*'])
*/
class TipoMaquinaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoMaquina::class;
    }
}
