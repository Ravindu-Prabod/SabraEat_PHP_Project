<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SabraEat - Mohan Bakery & Sweets</title>
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
        .search {
            width: 350px;
            padding: 12px 20px;
            border: none;
            background-color: #f0f3f7;
            border-radius: 20px;
            font-size: 14px;
        }
         .cart-btn {
            background-color: #D1D119;
            color: #172033;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 24px;
            border-radius: 20px;
            font-size: 14px;
        }
        .container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 0 20px;
        }
         .back-link {
            display: inline-block;
            color: #854d0e;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }
         .outlet {
            background-color: #FFFFFF;
            border: 1px solid #dce4ed;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 24px;
        }
         .photo {
            width: 200px;
            height: 110px;
            background-color: #FEF9C3;
            border: 1px solid #D1D119;
            border-radius: 15px;
            text-align: center;
            line-height: 110px;
            color: #854d0e;
            font-weight: bold;
        }
        .details h2 {
            font-size: 22px;
            margin: 0 0 6px 0;
        }
        .status-badge {
            background-color: #FEF9C3;
            color: #854d0e;
            font-size: 11px;
            padding: 4px 10px;
            border-radius: 12px;
        }
        .details p {
            font-size: 13px;
            color: #64748B;
            margin: 5px 0;
        }
        .categories {
            margin-top: 12px;
            display: flex;
            gap: 8px;
        }
        .category {
            background-color: #f0f3f7;
            color: #172033;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .category.active {
            background-color: #D1D119;
        }
        .menu-title {
            font-size: 18px;
            margin: 25px 0 15px 0;
        }
        .food-menu {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }
         .food-card {
            background-color: #FFFFFF;
            border: 1px solid #dce4ed;
            border-radius: 15px;
            padding: 14px;
        }
        .food-image {
            background-color: #FEF9C3;
            height: 85px;
            border-radius: 12px;
            margin-bottom: 12px;
        }
        .food-card h4 {
            font-size: 14px;
            margin: 0 0 8px 0;
        }
        .card-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .food-card p {
            font-size: 13px;
            font-weight: bold;
            margin: 0;
        }
        .add {
            background-color: #D1D119;
            border: none;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
        }
        .outlet-info-box {
            background-color: #FEFCE8;
            border: 1px solid #D1D119;
            border-radius: 15px;
            padding: 18px 24px;
            margin: 30px 0 40px 0;
        }
        .outlet-info-box h4 {
            margin: 0 0 8px 0;
            font-size: 15px;
            color: #854d0e;
        }
         .outlet-info-box p {
            margin: 4px 0;
            font-size: 13px;
            color: #64748B;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#" class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="SabraEat Logo" style="height: 40px;">
        </a>
        <input type="text" class="search" placeholder="Search bakery items in Mohan Bakery...">
        <a href="#" class="cart-btn">Cart ({{ collect(session('cart', []))->sum('qty') }})</a>
    </div>

    <div class="container">
        <a href="#" class="back-link">← Back to Home</a>

        <div class="outlet">
            <div class="photo">Bakery Photo</div>
            <div class="details">
                <h2>Mohan Bakery & Sweets <span class="status-badge">Open</span></h2>
                <p><b style="color:#b6b900;">★ 4.7</b> (89 reviews)</p>
                <p>• Near the uni main gate, Pambahinna • 5 mins Delivery</p>
                <div class="categories">
                    <span class="category active">All Bakery Items</span>
                    <span class="category">Short Eats</span>
                    <span class="category">Cakes & Buns</span>
                </div>
            </div>
        </div>

        <h3 class="menu-title">Fresh Bakery & Short Eats Items</h3>

        <div class="food-menu">
            <div class="food-card">
                <div class="food-image"></div>
                <h4>Fish Bun (Malu Paan)</h4>
                <div class="card-bottom">
                    <p>Rs. 120</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Sausage Roll</h4>
                <div class="card-bottom">
                    <p>Rs. 140</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Egg Pastry</h4>
                <div class="card-bottom">
                    <p>Rs. 130</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Vegetable Roti</h4>
                <div class="card-bottom">
                    <p>Rs. 100</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Butter Cake Slice</h4>
                <div class="card-bottom">
                    <p>Rs. 150</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Chicken Patties (2pcs)</h4>
                <div class="card-bottom">
                    <p>Rs. 160</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Chocolate Donut</h4>
                <div class="card-bottom">
                    <p>Rs. 180</p>
                    <button class="add">+</button>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Sweet Cream Bun</h4>
                <div class="card-bottom">
                    <p>Rs. 110</p>
                    <button class="add">+</button>
                </div>
            </div>
        </div>

        <div class="outlet-info-box">
            <h4>Mohan Bakery & Sweets - Outlet Info</h4>
            <p>Contact Number: 077 8009026</p>
            <p>Location: Near the university main gate, Pambahinna</p>
            <p>Operating Hours: Open Daily 4:30 PM - 4:30 AM</p>
        </div>
    </div>

</body>
</html>