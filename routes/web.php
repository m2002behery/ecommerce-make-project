<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\firstController;
use App\Http\Controllers\productcontroller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

Route::get('/', [firstController::class, 'mainpage']);

Route::get('/product/{catid?}', [firstController::class, 'getcategoryproducts']);

Route::get( '/category', [firstController::class, 'getallcategorywithproduct']);

Route::get('/addproduct', function() {
   $categories = category::all();
   return view('addproduct', compact('categories'));
});

Route::post('/storeproduct', [productcontroller::class, 'storeproduct']);