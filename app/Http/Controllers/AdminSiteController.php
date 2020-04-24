<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSiteController extends Controller
{
   public function index(){
       
       return view('admin.pages.index');
   }
    
       public function create(){
       
       return view('admin.pages.product.create');
   }
}
