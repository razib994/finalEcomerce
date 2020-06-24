<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
	// Home page //
   public function index(){
   	return view('front-end.pages.home.index');
   }
   // Home page //
   public function products(){
   	$products = Product::orderBy('id', 'desc')->get();
   	return view('front-end.pages.product.index')->with('products', $products);
   }
}
