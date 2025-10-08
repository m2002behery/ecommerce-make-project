<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    public  function addproduct ()
    {

        return view('addproduct', [ ]);
    }


    function storeproduct (Request $request) {

     $request->validate([
        'name' => ['required', 'unique:products','max:255'],
        
         'description' => 'required',
        'image' => 'required',
        'category_id' => 'required',
        'quantity' => 'required',
        'price' => 'required',
     ]);

   $newproduct = new product();
   $newproduct->name = $request->input('name');
   $newproduct->description = $request->input('description');
     $newproduct->image = $request->input('image');
    $newproduct->quantity = $request->input('quantity');
    $newproduct->price = $request->input('price');
   $newproduct->category_id = $request->input('category_id');
    $newproduct->save();
    return redirect('/addproduct');
}
}