<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function create()
    {
        return view('products.create');
    }

    function store(Request $request)
    {
        return dd($request->all());
    }
}
