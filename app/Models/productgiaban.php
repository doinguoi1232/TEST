<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class productgiaban
 * @package App\Models
 * @version July 3, 2018, 7:10 am UTC
 *
 * @property varchar name
 */
class productgiaban extends Model
{
    use SoftDeletes;

    public $table = 'productgiabans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
