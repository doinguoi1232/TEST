<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model {

    protected $table='orders';
    protected $fillable=['tenkhachhang','tongtien','tiendathanhtoan','tienchuathanhtoan','loinhuan','	userd_id'];
    public $timetamps=true;
    public function products(){
        return $this->hasmany('App\products');
    }

}
