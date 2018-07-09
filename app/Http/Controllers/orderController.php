<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\orderDetail;
use Illuminate\Support\Facades\DB;
use App\products;
use App\stores;
use App\danhthu;
use App\productsgiabans;
class orderController extends Controller
{
    public function index()       
    {
        $order = order::all();
        return view('admin.order.index')->with('order', $order);
       
    }
    
    public function create()       
    {
        return view('admin.order.add');
       
    }    
    
    public function store(Request $request )       
    {
        $this->validate($request, [
            'tenkhachhang' => 'required|max:255',
        ],
                [
            'tenkhachhang.required' => 'Vui lòng nhập tên loại sản phẩm',
        ]); 
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order=new order;
        $order->tenkhachhang=$request->tenkhachhang;
        $order->tongtien=0;
        $order->tiendathanhtoan=$request->tiendathanhtoan;
        $order->tienchuathanhtoan=0;
        $order->loinhuan=0;
        $order->userd_id=1;
        $order->save();
        $danhthu = danhthu::all(); 
        foreach ($danhthu as $item){
              if((date('d-m-Y', strtotime($item->created_at)) === date('d-m-Y', strtotime($order->created_at)))){
                    return redirect()->route('indexOreder');
               }
        }
        $danhthus=new danhthu;
        $danhthus->danhthu=0;
        $danhthus->save();
        return redirect()->route('indexOreder');
    }

    public function show($id)
    {
        $orderId=$id;
        $order=  DB::table('orders_detail')->where('order_id',$id)->get();
        return view('admin.order.indexShow')
            ->with('order', $order)->with('orderId', $orderId);
    }

    public function createOrderDetail($id)
    {
        $detail=$id;
        $products = productsgiabans::all();
        return view('admin.order.addStore')->with('products', $products)->with('detail', $detail);
    }
    
    public function storeOrderDetail(Request $request)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $products = productsgiabans::findOrFail($request->ten_san_pham);
        $tiennhap=$products->gianhap*$request->so_luong;
        $giaban=$products->giaban*$request->so_luong;
        $orderDetail=new orderDetail;  
        $orderDetail->sanpham=$request->ten_san_pham;
        $orderDetail->soluong=$request->so_luong;
        $orderDetail->dongia=$products->giaban;
        $orderDetail->tienchuathanhtoan=$giaban-$tiennhap;
        $orderDetail->giamgia=0;
        $orderDetail->thanhtien=$giaban;
        $orderDetail->order_id=$request->order_id;
        $orderDetail->save();
        $order = order::findOrFail($request->order_id);
        $order->loinhuan=$order->loinhuan+$orderDetail->tienchuathanhtoan;
        $order->tongtien=$order->tongtien+$orderDetail->thanhtien;
        $order->save();
        $tienchuathanhtoan = order::findOrFail($request->order_id);
        $tienchuathanhtoan->tienchuathanhtoan=$order->tongtien-$tienchuathanhtoan->tiendathanhtoan;
        $tienchuathanhtoan->save();
        $danhthu = danhthu::all();
        foreach ($danhthu as $item){
              if(date('d-m-Y', strtotime($item->created_at))== date('d-m-Y', strtotime($orderDetail->created_at))){
                    $danhthu_id=danhthu::where('created_at',$item->created_at)->first();
                    $danhthu_item = danhthu::find($danhthu_id->id);
                    $danhthu_item->danhthu=$danhthu_item->danhthu+$orderDetail->tienchuathanhtoan;
                    $danhthu_item->save();
               }
        }
        $soluong_stores = stores::all();
        foreach ($soluong_stores as $soluong_store){
               if($soluong_store->products_id==$products->id && $soluong_store->soluong>$request->so_luong ){
                    $stores_soluong=stores::where('products_id',$products->id)->first();
                    $stores_id = stores::find($stores_soluong->id);
                    $stores_id->soluong=$stores_soluong->soluong-$request->so_luong;
                    $stores_id->save();
               }
        }
        return redirect()->route('indexOreder');
       
    }

    public function listDanhthu()
    {
        $danhthu = danhthu::all(); 
        return view('admin.danhthu.index')->with('danhthu', $danhthu);
    }
}
