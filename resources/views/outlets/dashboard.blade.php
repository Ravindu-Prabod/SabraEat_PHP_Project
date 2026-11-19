<!DOCTYPE html>
<html lang="en">
<head>
    <title>SabraEat - Outlet Admin Dashboard</title>
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="SabraEat Logo" style="height: 40px;">
        </a>
        <div class="outlet-badge">Uvindu Food Cabin</div>
    </div>

    <div class="container">
        <h1>Live Incoming Orders</h1>

        <div class="stats-grid">
            <div class="stat-card">
                <p>Pending Orders Today</p>
                <h2>04</h2>
            </div>
            <div class="stat-card">
                <p>Currently Preparing</p>
                <h2 class="text-yellow">02</h2>
            </div>
            <div class="stat-card">
                <p>Today's Revenue</p>
                <h2 class="text-green">Rs. 12,450</h2>
            </div>
        </div>

        <div class="orders-box">
            <h3>Active Customer Orders</h3>

            <div class="order-row">
                <div class="order-id">#SE-84920</div>
                <div class="customer-name">Sabaragamuwa Student (Hostel C)</div>
                <div class="order-items">Chicken Rice & Curry, Fish Bun (2x)</div>
                <div class="order-price">Rs. 790</div>
                <div>
                    <button class="action-btn btn-preparing">Mark Preparing →</button>
                </div>
            </div>

            <div class="order-row">
                <div class="order-id">#SE-84923</div>
                <div class="customer-name">Applied Sciences Faculty</div>
                <div class="order-items">Fried Rice, Egg Rice & Curry</div>
                <div class="order-price">Rs. 730</div>
                <div>
                    <button class="action-btn btn-ready">Ready for Pickup</button>
                </div>
            </div>

            <div class="order-row">
                <div class="order-id">#SE-84921</div>
                <div class="customer-name">Faculty of Technology</div>
                <div class="order-items">Veggi Rice & Curry</div>
                <div class="order-price">Rs. 250</div>
                <div>
                    <button class="action-btn btn-preparing">Mark Preparing →</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>