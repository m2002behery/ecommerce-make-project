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

Route::get('/addproduct', [productcontroller::class, 'addproduct']);

Route::get('/storeproduct', function (Request $request) {

     $request->validate([
        'name' => ['required', 'unique:products','max:255'],
        
        // 'image' => '['required',
        'quantity' => 'required',
        'price' => 'required',
     ]);

   $newproduct = new product();
   $newproduct->name = $request->input('name');
   $newproduct->description = $request->input('description');
    // $newproduct->image = $request->input('image');
    $newproduct->quantity = $request->input('quantity');
    $newproduct->price = $request->input('price');
    // $newproduct->category_id = $request->input('category_id');
    $newproduct->save();
    return redirect('/addproduct');

});