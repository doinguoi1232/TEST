<?php

namespace App\Repositories;

use App\Models\productgiaban;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productgiabanRepository
 * @package App\Repositories
 * @version July 3, 2018, 7:10 am UTC
 *
 * @method productgiaban findWithoutFail($id, $columns = ['*'])
 * @method productgiaban find($id, $columns = ['*'])
 * @method productgiaban first($columns = ['*'])
*/
class productgiabanRepository extends BaseRepository
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
        return productgiaban::class;
    }
}
