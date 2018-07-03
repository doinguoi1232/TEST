<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class providers extends Model {

    protected $table='providers';
    protected $fillable=['name','address','phonenumber','email','description'];
    public $timetamps=true;
    public function products(){
        return $this->hasmany('App\products');
    }

}
