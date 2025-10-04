<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class firstController extends Controller
{
    public  function  mainpage()
    {
        $categories =  category::all();

        return view('welcome', ['categories' => $categories]);
    }

    public  function  getcategoryproducts($catid)
    {

        $products = product::where('category_id', $catid)->get();
        return view('product', ['products' => $products]);
    }

    public function getallcategorywithproduct()
    {
        $categories =  category::all();
        $products = product::all();
        return view('category', ['categories' => $categories, 'products' => $products]);
    }
}
