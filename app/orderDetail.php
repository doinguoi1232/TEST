<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model {

    protected $table='orders_detail';
    protected $fillable=['sanpham','soluong','dongia','tienchuathanhtoan','giamgia','	thanhtien','order_id'];
    public $timetamps=true;
    public function products(){
        return $this->hasmany('App\products');
    }

}
