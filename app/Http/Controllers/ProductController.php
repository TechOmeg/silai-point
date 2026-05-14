<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function cambric()
{
    $products = Product::where('category_id',1)->latest()->get();
    return view('category.cambric',compact('products'));
}

public function linen()
{
    $products = Product::where('category_id',2)->latest()->get();
    return view('category.linen',compact('products'));
}

public function khaddar()
{
    $products = Product::where('category_id',3)->latest()->get();
    return view('category.khaddar',compact('products'));
}

public function karandi()
{
    $products = Product::where('category_id',4)->latest()->get();
    return view('category.karandi',compact('products'));
}

public function boski()
{
    $products = Product::where('category_id',5)->latest()->get();
    return view('category.boski',compact('products'));
}

public function cotton()
{
    $products = Product::where('category_id',6)->latest()->get();
    return view('category.cotton',compact('products'));
}

public function washwear()
{
    $products = Product::where('category_id',7)->latest()->get();
    return view('category.washwear',compact('products'));
}
}
