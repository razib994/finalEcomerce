<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index()
    {
    	return view('admin.pages.index');
    }



    // Category ------------->
    public function categoryCreate(){
    	return view('admin.pages.category.create');
    }
    public function categoryShow(){
    	return view('admin.pages.category.show');
    }
    public function categoryUpdate(){
    	return view('admin.pages.category.update');
    }



    // Product ------------------>
    public function create()
    {
    	return view('admin.pages.products.create');
    }
     public function productShow()
    {
    	return view('admin.pages.products.show');
    }
     public function productUpdate()
    {
    	return view('admin.pages.products.update');
    }


    // Brand --------------->
    public function brandCreate()
    {
    	return view('admin.pages.brands.create');
    }
     public function brandShow()
    {
    	return view('admin.pages.brands.show');
    }
     public function brandUpdate()
    {
    	return view('admin.pages.brands.update');
    }
}
