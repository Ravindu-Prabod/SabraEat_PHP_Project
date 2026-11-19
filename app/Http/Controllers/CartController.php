<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $name = $request->item_name;
        $price = (int) $request->item_price;

        if (isset($cart[$name])) {
            $cart[$name]['qty']++;
        } else {
            $cart[$name] = [
                'price' => $price,
                'qty' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', $name . ' added to cart!');
    }
}
