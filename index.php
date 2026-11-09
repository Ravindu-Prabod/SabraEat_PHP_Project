<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SabraEat - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <a href="index.php" class="logo"> Sabra<span>Eat</span></a>

    <p class="delivery">
        Deliver to:<br>
        <b>Sabaragamuwa University / Belihuloya</b>
    </p>

    <input type="text" placeholder="Search food, breakfast, bakery items...">

    <button class="login-btn">Login</button>
</header>

<main class="container">

    <section class="hero">
        <h1>Delicious Food Delivered Fast!</h1>
        <p>Fresh meals from nearby campus outlets & bakeries.</p>

        <a href="foodoutlets.php" class="order-btn">
            Order Now 
        </a>
    </section>

    <h3>Shop by Category</h3>

    <section class="categories">

        <a href="foodoutlets.php" class="category">
            <h2>Food Items</h2>
            <p>(Breakfast / Lunch / Dinner / Rice & Curry)</p>
        </a>

        <a href="foodoutlets.php" class="category">
            <h2>Bakery & Snacks</h2>
            <p>(Short Eats / Bread / Cakes / Beverages)</p>
        </a>

    </section>

    <h3>Nearby Food Outlets</h3>

    <section class="outlet-container">

        <div class="outlet-card">
            <div class="card-header">UVINDU FOOD CABIN</div>
            <div class="card-content">
                <h4>Uvindu Food Cabin</h4>
                <p>• Near the uni main gate • 5 mins</p>
                <p class="rating">4.6 (88 reviews)</p>
                <a href="foodoutlets.php" class="menu-btn">View Menu </a>
            </div>
        </div>

        <div class="outlet-card">
            <div class="card-header">MOHAN BAKERY</div>
            <div class="card-content">
                <h4>Mohan Bakery & Sweets</h4>
                <p>• Near the uni main gate • 5 mins</p>
                <p class="rating">4.7 (89 reviews)</p>
                <a href="foodoutlets.php" class="menu-btn">View Menu </a>
            </div>
        </div>

        <div class="outlet-card">
            <div class="card-header">ROYAL BOX</div>
            <div class="card-content">
                <h4>Royal Box Restaurant</h4>
                <p>• Near the uni main gate • 5 mins</p>
                <p class="rating">4.8 (130 reviews)</p>
                <a href="foodoutlets.php" class="menu-btn">View Menu </a>
            </div>
        </div>

    </section>

</main>

</body>
</html>
