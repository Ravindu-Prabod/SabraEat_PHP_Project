<!DOCTYPE html>
<html>
<head>
    <title>SabraEat - Uvindu Food Cabin</title>
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
            font-size: 22px;
            font-weight: bold;
            color: #172033;
            text-decoration: none;
        }
        .logo-icon {
            background-color: #D1D119;
            padding: 6px 10px;
            border-radius: 10px;
        }
        .logo span {
           color: #8a8d00; }
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
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
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
        <input type="text" class="search" placeholder="Search meals in Uvindu Food Cabin...">
        <a href="#" class="cart-btn">Cart ({{ collect(session('cart', []))->sum('qty') }})</a>
    </div>

    <div class="container">
        <a href="#" class="back-link">← Back to Home</a>

        <div class="outlet">
            <div class="photo">Cabin Photo</div>
            <div class="details">
                <h2>Uvindu Food Cabin <span class="status-badge">Open</span></h2>
                <p><b style="color:#b6b900;">★ 4.6</b> (88 reviews)</p>
                <p>• Near the uni main gate • 5 mins Delivery</p>
                <div class="categories">
                    <span class="category active">Rice & Curry</span>
                    <span class="category">Breakfast</span>
                    <span class="category">Lunch</span>
                    <span class="category">Dinner</span>
                </div>
            </div>
        </div>

        <h3 class="menu-title">Rice & Curry Specials</h3>

        <div class="food-menu">
            <div class="food-card">
                <div class="food-image"></div>
                <h4>Chicken Rice & Curry</h4>
                <div class="card-bottom">
                    <p>Rs. 400</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Chicken Rice & Curry">
                        <input type="hidden" name="item_price" value="400">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Veggi Rice & Curry</h4>
                <div class="card-bottom">
                    <p>Rs. 250</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Veggi Rice & Curry">
                        <input type="hidden" name="item_price" value="250">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Egg Rice & Curry</h4>
                <div class="card-bottom">
                    <p>Rs. 300</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Egg Rice & Curry">
                        <input type="hidden" name="item_price" value="300">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Fish Rice & Curry</h4>
                <div class="card-bottom">
                    <p>Rs. 320</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Fish Rice & Curry">
                        <input type="hidden" name="item_price" value="320">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image"></div>
                <h4>Fried Rice</h4>
                <div class="card-bottom">
                    <p>Rs. 430</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Fried Rice">
                        <input type="hidden" name="item_price" value="430">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>

            <div class="food-card">
               <div class="food-image"></div>
                <h4>Chicken Fried Rice</h4>
                <div class="card-bottom">
                    <p>Rs. 500</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_name" value="Chicken Fried Rice">
                        <input type="hidden" name="item_price" value="500">
                        <button type="submit" class="add">+</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="outlet-info-box">
            <h4>Uvindu Food Cabin - Outlet Info</h4>
            <p>Contact Number: 077 83187607</p>
            <p>Location: Near the university main gate, Pambahinna</p>
            <p>Operating Hours: Open Daily 6:30 AM - 10:30 PM</p>
        </div>
    </div>
</body>
</html>