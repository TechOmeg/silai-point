<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderOverview()
    {
        return view('frontend.order_overview');
    }
}
