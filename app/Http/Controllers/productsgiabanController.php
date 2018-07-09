<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productsgiabans;
class productsgiabanController extends Controller
{
   public function index()       
    {
        $productsgiabans = productsgiabans::all();

       
       return view('productsgiabans.index')->with('productsgiabans', $productsgiabans);
       
    }
    public function create()       
    {
        return view('productsgiabans.create');
       
    }

    public function store(Request $request )       
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->validate($request, [
            'name' => 'required|max:255',
        ],
                [
            'name.required' => 'Vui lòng nhập tên loại sản phẩm',
        ]); 
        $productsgiabans=new productsgiabans;
        $productsgiabans->name=$request->name;
        $productsgiabans->giaban=$request->gia_nhap;
        $productsgiabans->gianhap=$request->gia_ban;
        $productsgiabans->save();
        return redirect()->route('indexProductsgiaban');
    }

    public function edit($id)       
    {
        $productsgiabans = productsgiabans::find($id);
        return view('productsgiabans.edit')->with('productsgiabans', $productsgiabans);
    }

    public function editStore(Request $request ,$id)       
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $productsgiabans = productsgiabans::find($id);
        $productsgiabans->name=$request->name;
        $productsgiabans->giaban=$request->gia_nhap;
        $productsgiabans->gianhap=$request->gia_ban;
        $productsgiabans->save();
        return redirect()->route('indexProductsgiaban');
    }
    
    public function destroy($id)       
    {
        productsgiabans::destroy($id);
        return redirect()->route('indexProductsgiaban');
    }
    
}
