<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\products;
use App\stores;
class productsController extends Controller
{
    public function index()
    {
        $products = products::orderBy('created_at', 'desc')->get();
        return view('admin.products.index')->with('products', $products);
       
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.add')->with('categories', $categories);
       
    }
    
    public function store(Request $request )
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->validate($request, [
            'name' => 'required|max:255',
            'don_gia' => 'required|max:255',
            'so_luong' => 'required|max:255',
            'don_vi' => 'required|max:255',
            'ghi_chu' => 'required|max:255',
            'gia_ban' => 'required|max:255',
        ],
        [
            'name.required' => 'Vui lòng nhập tên sản phâm',
            'don_gia.required' => 'Vui lòng nhập đơn giá',
            'so_luong.required' => 'Vui lòng nhập số lượng',
            'don_vi.required' => 'Vui lòng nhập đơn vị',
            'ghi_chu.required' => 'Vui lòng nhập ghi chú',
            'gia_ban.required' => 'Vui lòng nhập giá bán',  
        ]); 
        $products=new products;
        $products->name=$request->name;
        $products->alias=$request->name;
        $products->price=$request->don_gia;
        $products->keywrod=$request->name;
        $products->soluong=$request->so_luong;
        $products->quycach=$request->name;
        $products->donvitinh=$request->don_vi;
        $products->ghichu=$request->ghi_chu;
        $products->description=222;
        $products->giaban=$request->gia_ban;
        $products->userd_id=1;
        $products->category_id=$request->categories;
        $products->providers_id=1;
        $products->save();
        $soluong_stores = stores::all();
           foreach ($soluong_stores as $soluong_store){
               if($soluong_store->name==$request->name){
                    $stores_soluong=stores::where('name',$request->name)->first();
                    $stores_id = stores::find($stores_soluong->id);
                    $stores_id->soluong=$stores_soluong->soluong+$request->so_luong;
                    $stores_id->save();
                    return redirect()->route('indexProducts');
               }
           }
        $stores=new stores;
        $stores->soluong=$request->so_luong;
        $stores->products_id=$products->id;
        $stores->userd_id=1;
        $stores->name=$request->name;
        $stores->save();
        return redirect()->route('indexProducts');
        
       
    }
}
