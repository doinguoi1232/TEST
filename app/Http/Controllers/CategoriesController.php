<?php

namespace App\Http\Controllers;
use App\Category;
use App\products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()       
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
       
    }
    public function create()       
    {
        return view('admin.categories.add');
       
    }
    public function store(Request $request )       
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ],
                [
            'name.required' => 'Vui lòng nhập tên loại sản phẩm',
        ]); 
        $category=new category;
        $category->name=$request->name;
        $category->alias=$request->name;
        $category->parent_id=11;
        $category->keywords=$request->name;
        $category->description=222;
        $category->save();
        return redirect()->route('indexCategories');
    }
    
    public function edit($id)       
    {
        $category = category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }
    
    public function editStore(Request $request ,$id)       
    {
        $category = category::find($id);
        $category->name=$request->name;
        $category->save();
        return redirect()->route('indexCategories');
    }
    
    public function destroy($id)       
    {
        category::destroy($id);
        return redirect()->route('indexCategories');
    }
    
    public function show($id)       
    {
        $products = products::find($id)->get();
        return view('admin.categories.indexShow')->with('products', $products);
    }
}
