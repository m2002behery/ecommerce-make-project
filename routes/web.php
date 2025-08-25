<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    $result = DB::table('categories')->get();

    return view('welcome', ['categories' => $result]);
});



Route::get('/product/{catid?}', function ($catid = null) {
    if ($catid == null) {

        $result = DB::table('products')->get();
         return view('product', ['products' => $result]);
    } else {
        $result = DB::table('products')->where('category_id', $catid)->get();
         return view('product', ['products' => $result]);
    }
  
});



Route::get('/category', function () {
    return view('category');
});
