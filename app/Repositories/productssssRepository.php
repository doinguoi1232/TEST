<?php

namespace App\Repositories;

use App\Models\productssss;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productssssRepository
 * @package App\Repositories
 * @version July 3, 2018, 4:14 am UTC
 *
 * @method productssss findWithoutFail($id, $columns = ['*'])
 * @method productssss find($id, $columns = ['*'])
 * @method productssss first($columns = ['*'])
*/
class productssssRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productssss::class;
    }
}
