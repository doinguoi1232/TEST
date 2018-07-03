<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model {

    protected $table='categories';
    protected $fillable=['name','alias','parent_id','keywords','description '];

    public $timestamps=true;
    public function products(){
        return $this->hasmany('App\products');
    }
}
