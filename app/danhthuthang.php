<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class danhthuthang extends Model {

    protected $table='danhthuthang';
    protected $fillable=['danhthu'];

    public $timestamps=true;
}
