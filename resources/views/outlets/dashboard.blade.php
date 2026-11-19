<!DOCTYPE html>
<html lang="en">
<head>
    <title>SabraEat - Outlet Admin Dashboard</title>
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
        .outlet-badge {
            background-color: #FEFCE8;
            border: 1px solid #D1D119;
            color: #854d0e;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }
        h1 { font-size: 24px; margin-bottom: 20px; }
        .alert-success {
            background-color: #dcfce7;
            border: 1px solid #86efac;
            color: #166534;
            padding: 12px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: bold;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background-color: #FFFFFF;
            border: 1px solid #dce4ed;
            border-radius: 15px;
            padding: 20px 24px;
        }
        .stat-card p {
            margin: 0 0 8px 0;
            font-size: 13px;
            color: #64748B;
        }
        .stat-card h2 { margin: 0; font-size: 26px; }
        .text-yellow { color: #b6b900; }
        .text-green { color: #16a34a; }
        .orders-box {
            background-color: #FFFFFF;
            border: 1px solid #dce4ed;
            border-radius: 15px;
            padding: 24px;
        }
        .orders-box h3 {
            margin: 0 0 20px 0;
            font-size: 16px;
        }
        .order-row {
            display: grid;
            grid-template-columns: 1.2fr 2.2fr 2.5fr 1fr 1.5fr;
            align-items: center;
            padding: 16px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
        }
        .order-row:last-child { border-bottom: none; }
        .order-id { font-weight: bold; }
        .customer-name { font-weight: 600; }
        .order-items {
            color: #64748B;
            font-size: 13px;
        }
        .order-price { font-weight: bold; }
        .action-btn {
            padding: 8px 14px;
            border-radius: 10px;
            border: none;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            width: 145px;
        }
        .btn-preparing {
            background-color: #FEF9C3;
            color: #854d0e;
        }
        .btn-ready {
            background-color: #dcfce7;
            color: #166534;
        }
        .btn-completed {
            background-color: #f1f5f9;
            color: #64748B;
            cursor: default;
        }
    </style>
</head>
<body>

    @php
        $orders = session('orders', [
            [
                'id' => '#SE-84920',
                'customer' => 'Sabaragamuwa Student (Hostel C)',
                'items' => 'Chicken Rice & Curry, Fish Bun (2x)',
                'total' => 790,
                'qty' => 3,
                'status' => 'pending',
            ],
            [
                'id' => '#SE-84923',
                'customer' => 'Applied Sciences Faculty',
                'items' => 'Fried Rice, Egg Rice & Curry',
                'total' => 730,
                'qty' => 2,
                'status' => 'preparing',
            ],
            [
                'id' => '#SE-84921',
                'customer' => 'Faculty of Technology',
                'items' => 'Veggi Rice & Curry',
                'total' => 250,
                'qty' => 1,
                'status' => 'pending',
            ],
        ]);

        if (!is_array($orders)) {
            $orders = [];
        }

        $pendingCount = collect($orders)->where('status', 'pending')->count();
        $preparingCount = collect($orders)->where('status', 'preparing')->count();
        $revenue = collect($orders)->sum(function ($order) {
            return (int) ($order['total'] ?? 0);
        });
    @endphp

    <div class="navbar">
        <a href="{{ url('/uvindu') }}" class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="SabraEat Logo" style="height: 40px;">
        </a>
        <div class="outlet-badge">Uvindu Food Cabin</div>
    </div>

    <div class="container">
        <h1>Live Incoming Orders</h1>

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <div class="stats-grid">
            <div class="stat-card">
                <p>Pending Orders Today</p>
                <h2>{{ str_pad($pendingCount, 2, '0', STR_PAD_LEFT) }}</h2>
            </div>
            <div class="stat-card">
                <p>Currently Preparing</p>
                <h2 class="text-yellow">{{ str_pad($preparingCount, 2, '0', STR_PAD_LEFT) }}</h2>
            </div>
            <div class="stat-card">
                <p>Today's Revenue</p>
                <h2 class="text-green">Rs. {{ number_format($revenue) }}</h2>
            </div>
        </div>

        <div class="orders-box">
            <h3>Active Customer Orders</h3>

            @forelse($orders as $index => $order)
                @php
                    $status = $order['status'] ?? 'pending';
                @endphp
                <div class="order-row">
                    <div class="order-id">{{ $order['id'] ?? '#SE-00000' }}</div>
                    <div class="customer-name">{{ $order['customer'] ?? 'Sabaragamuwa Student' }}</div>
                    <div class="order-items">{{ $order['items'] ?? '' }}</div>
                    <div class="order-price">Rs. {{ number_format((int) ($order['total'] ?? 0)) }}</div>
                    <div>
                        @if($status === 'pending')
                            <form action="{{ route('dashboard.orders.status', ['index' => $index]) }}" method="POST">
                                @csrf
                                <button type="submit" class="action-btn btn-preparing">Mark Preparing →</button>
                            </form>
                        @elseif($status === 'preparing')
                            <form action="{{ route('dashboard.orders.status', ['index' => $index]) }}" method="POST">
                                @csrf
                                <button type="submit" class="action-btn btn-ready">Ready for Pickup</button>
                            </form>
                        @else
                            <button type="button" class="action-btn btn-completed" disabled>Completed</button>
                        @endif
                    </div>
                </div>
            @empty
                <p style="color: #64748B; font-size: 14px; margin: 0;">No active customer orders right now.</p>
            @endforelse
        </div>
    </div>

</body>
</html>