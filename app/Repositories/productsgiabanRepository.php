<?php

namespace App\Repositories;

use App\Models\productsgiaban;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productsgiabanRepository
 * @package App\Repositories
 * @version July 3, 2018, 3:37 pm UTC
 *
 * @method productsgiaban findWithoutFail($id, $columns = ['*'])
 * @method productsgiaban find($id, $columns = ['*'])
 * @method productsgiaban first($columns = ['*'])
*/
class productsgiabanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'giaban',
        'gianhap'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productsgiaban::class;
    }
}
