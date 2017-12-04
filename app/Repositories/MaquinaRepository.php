<?php

namespace App\Repositories;

use App\Models\Maquina;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MaquinaRepository
 * @package App\Repositories
 * @version December 2, 2017, 12:03 pm UTC
 *
 * @method Maquina findWithoutFail($id, $columns = ['*'])
 * @method Maquina find($id, $columns = ['*'])
 * @method Maquina first($columns = ['*'])
*/
class MaquinaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nroSerie',
        'tipo_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Maquina::class;
    }
}
