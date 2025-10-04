<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;

Route::get('/', function () {
    $categories =  category::all();

    return view('welcome', ['categories' => $categories]);
});



Route::get('/product/{catid?}', function ($catid = null) {
    if ($catid ) {
 $result =product::where('category_id', $catid)->get();
         return view('product', ['products' => $result]);
       
    } else {
        $products = product::all();
         return view('product', ['products' => $products]);
    }
  
});



Route::get('/category', function () {
     $categories =  category::all();
     $products =product::all();
    return view('category', ['categories' => $categories, 'products' => $products]);
});
