<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabric;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        // ✅ CHECK LOGIN FIRST
    if (!auth()->check()) {
        return redirect()->route('login')
            ->with('error', 'Please login first to add items to cart.');
    }
        $fabric = Fabric::findOrFail($id);

        $meter = $request->meter;

        $totalPrice = $fabric->price * $meter;

        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            $cart[$id]['meter'] += $meter;

            $cart[$id]['total_price'] =
                $cart[$id]['meter'] * $fabric->price;
        }
        else
        {
            $cart[$id] = [

                'id' => $fabric->id,

                'name' => $fabric->name,

                'price_per_meter' => $fabric->price,

                'meter' => $meter,

                'total_price' => $totalPrice,

                'image' => $fabric->image,

                'fabric_type' => $fabric->fabric_type,

                'season' => $fabric->season,

            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()
            ->with('success', 'Fabric added to cart successfully!');
    }

     public function remove($id)
{
    $cart = session()->get('cart');

    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return back();
}

public function update(Request $request)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$request->id]))
    {
        $meter = (int) $request->meter;

        $cart[$request->id]['meter'] = $meter;

        $cart[$request->id]['total_price'] =
            $cart[$request->id]['price_per_meter'] * $meter;

        session()->put('cart', $cart);
    }

    return redirect()->back()
        ->with('success', 'Cart updated successfully!');
}
}