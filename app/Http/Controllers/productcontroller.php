<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public  function addproduct ()
    {

        return view('addproduct', [ ]);
    }
}
