<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class usr_profController extends Controller
{
     public function index()
    {

         $products = Product::inRandomOrder()->take(3)->get();
        return view('userProfile')->with('products', $products);
    }
}
