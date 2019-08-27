<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class IndexController extends Controller
{
    public function index(){

    	$all_products = Products::InRandomOrder()->take(16)->get();

    	return view('index',[

    		'all_products' => $all_products

    	]);
    }
}
