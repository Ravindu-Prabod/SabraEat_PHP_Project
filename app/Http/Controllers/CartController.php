<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        if (is_array($cart)) {
            foreach ($cart as $item) {
                if (is_array($item)) {
                    $total += ((int) ($item['price'] ?? 0)) * ((int) ($item['qty'] ?? 0));
                }
            }
        } else {
            $cart = [];
        }

        return view('outlets.cart', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $name = trim((string) $request->input('item_name'));
        $price = (int) $request->input('item_price', 0);

        if ($name === '') {
            return redirect()->back();
        }

        $cart = session()->get('cart', []);
        if (!is_array($cart)) {
            $cart = [];
        }

        if (isset($cart[$name]) && is_array($cart[$name])) {
            $cart[$name]['qty'] = ((int) ($cart[$name]['qty'] ?? 0)) + 1;
            $cart[$name]['price'] = (int) ($cart[$name]['price'] ?? $price);
        } else {
            $cart[$name] = [
                'price' => $price,
                'qty' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', $name . ' added to cart!');
    }

    public function remove(Request $request)
    {
        $name = trim((string) $request->input('item_name'));
        $cart = session()->get('cart', []);

        if ($name !== '' && is_array($cart) && array_key_exists($name, $cart)) {
            $qty = is_array($cart[$name]) ? (int) ($cart[$name]['qty'] ?? 1) : 1;

            if ($qty > 1) {
                $cart[$name]['qty'] = $qty - 1;
            } else {
                unset($cart[$name]);
            }

            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    public function clear()
    {
        session()->forget('cart');

        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (!is_array($cart) || empty($cart)) {
            return redirect()->route('cart.index');
        }

        $customerName = trim((string) $request->input('customer_name'));

        if ($customerName === '') {
            $customerName = 'Sabaragamuwa Student';
        }

        $itemsSummary = [];
        $total = 0;
        $totalQty = 0;

        foreach ($cart as $name => $item) {
            if (!is_array($item)) {
                continue;
            }

            $qty = (int) ($item['qty'] ?? 0);
            $price = (int) ($item['price'] ?? 0);

            if ($qty <= 0) {
                continue;
            }

            $itemLabel = (string) $name;
            $itemsSummary[] = $itemLabel . ($qty > 1 ? ' (' . $qty . 'x)' : '');
            $total += $price * $qty;
            $totalQty += $qty;
        }

        if (empty($itemsSummary)) {
            session()->forget('cart');

            return redirect()->route('cart.index');
        }

        $orders = session()->get('orders', []);
        if (!is_array($orders)) {
            $orders = [];
        }

        do {
            $orderId = '#SE-' . random_int(10000, 99999);
            $exists = collect($orders)->contains('id', $orderId);
        } while ($exists);

        array_unshift($orders, [
            'id' => $orderId,
            'customer' => $customerName,
            'items' => implode(', ', $itemsSummary),
            'total' => $total,
            'qty' => $totalQty,
            'status' => 'pending',
        ]);

        session()->put('orders', $orders);
        session()->forget('cart');

        return redirect('/dashboard')->with('success', 'Order placed successfully!');
    }


    public function updateStatus(Request $request, int $index)
{
    $orders = session()->get('orders', []);

    if (!is_array($orders) || !array_key_exists($index, $orders) || !is_array($orders[$index])) {
        return redirect()->back();
    }

    $currentStatus = $orders[$index]['status'] ?? 'pending';

    if ($currentStatus === 'pending') {
        $orders[$index]['status'] = 'preparing';
    } elseif ($currentStatus === 'preparing') {
        $orders[$index]['status'] = 'ready';
    }

    session()->put('orders', $orders);

    return redirect()->back();
}
}