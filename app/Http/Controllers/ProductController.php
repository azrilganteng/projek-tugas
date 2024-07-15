<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.home', compact('products'));
    }

    public function crud()
    {
        return view('admin.product.crud');
    }
}
