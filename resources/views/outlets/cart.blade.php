<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SabraEat - Your Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            color: #172033;
            margin: 0;
        }
        .navbar {
            background-color: #FFFFFF;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e2e8f0;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .nav-links {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        .nav-btn {
            background-color: #f0f3f7;
            color: #172033;
            text-decoration: none;
            padding: 9px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }
        .cart-btn {
            background-color: #D1D119;
            color: #172033;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 20px;
            font-size: 14px;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .cart-box {
            background-color: #FFFFFF;
            border: 1px solid #dce4ed;
            border-radius: 15px;
            padding: 24px;
        }
        .cart-row {
            display: grid;
            grid-template-columns: 2.5fr 1fr 1fr 1.2fr 1fr;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
        }
        .cart-header {
            font-weight: bold;
            color: #64748B;
            font-size: 13px;
        }
        .remove-btn {
            background-color: #fee2e2;
            color: #991b1b;
            border: none;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }
        .clear-btn {
            background-color: #f1f5f9;
            color: #172033;
            border: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
        }
        .summary-box {
            background-color: #FEFCE8;
            border: 1px solid #D1D119;
            border-radius: 15px;
            padding: 20px 24px;
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .empty-msg {
            text-align: center;
            padding: 30px 0;
            color: #64748B;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="SabraEat Logo" style="height: 40px;">
        </a>
        <div class="nav-links">
            <a href="{{ url('/uvindu') }}" class="nav-btn">Uvindu Cabin</a>
            <a href="{{ url('/mohan') }}" class="nav-btn">Mohan Bakery</a>
            <a href="{{ route('cart.index') }}" class="cart-btn">Cart ({{ collect(session('cart', []))->sum('qty') }})</a>
        </div>
    </div>

    <div class="container">
        <h2>Your Cart</h2>

        <div class="cart-box">
            @if(count($cart) > 0)
                <div class="cart-row cart-header">
                    <div>Item</div>
                    <div>Price</div>
                    <div>Qty</div>
                    <div>Subtotal</div>
                    <div>Action</div>
                </div>

                @foreach($cart as $name => $item)
                    <div class="cart-row">
                        <div><strong>{{ $name }}</strong></div>
                        <div>Rs. {{ $item['price'] }}</div>
                        <div>{{ $item['qty'] }}</div>
                        <div><strong>Rs. {{ $item['price'] * $item['qty'] }}</strong></div>
                        <div>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="item_name" value="{{ $name }}">
                                <button type="submit" class="remove-btn">Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach

                <div class="summary-box">
                    <div>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            <button type="submit" class="clear-btn">Clear Cart</button>
                        </form>
                    </div>
                    <div>
                        <span style="font-size: 14px; color: #854d0e; font-weight: bold;">Total: </span>
                        <span style="font-size: 22px; font-weight: bold;">Rs. {{ $total }}</span>
                    </div>
                </div>
            @else
                <div class="empty-msg">
                    <p>Your cart is empty right now.</p>
                    <a href="{{ url('/uvindu') }}" class="nav-btn">Browse Uvindu Food Cabin</a>
                    <a href="{{ url('/mohan') }}" class="nav-btn">Browse Mohan Bakery</a>
                </div>
            @endif
        </div>
    </div>

</body>
</html>