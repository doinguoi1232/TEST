<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stores;
class StoreController extends Controller
{
    public function index()
    {
        $nhakho = stores::all();
        return view('admin.nhakho.index')->with('nhakho', $nhakho);
       
    }
}
