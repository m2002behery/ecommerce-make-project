<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;

Route::get('/', function () {
    $result =  category::all();

    return view('welcome', ['categories' => $result]);
});



Route::get('/product/{catid?}', function ($catid = null) {
    if ($catid ) {
 $result =product::where('category_id', $catid)->get();
         return view('product', ['products' => $result]);
       
    } else {
        $result = product::all();
         return view('product', ['products' => $result]);
    }
  
});



Route::get('/category', function () {
    return view('category');
});
