<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productsgiaban
 * @package App\Models
 * @version July 3, 2018, 3:37 pm UTC
 *
 * @property string name
 * @property integer giaban
 * @property integer gianhap
 */
class productsgiaban extends Model
{
    use SoftDeletes;

    public $table = 'productsgiabans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'giaban',
        'gianhap'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'giaban' => 'integer',
        'gianhap' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
