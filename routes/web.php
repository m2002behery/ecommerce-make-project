<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\firstController;
use App\Models\category;
use App\Models\product;

Route::get('/', [firstController::class, 'mainpage']);

Route::get('/product/{catid?}', [firstController::class, 'getcategoryproducts']);

Route::get( '/category', [firstController::class, 'getallcategorywithproduct']);
