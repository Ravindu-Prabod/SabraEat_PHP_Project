<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SabraEat | Home</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Arial,Helvetica,sans-serif;background:#f6f8fb;color:#172033}
a{text-decoration:none;color:inherit}
.topbar{height:55px;background:#fff;border-bottom:1px solid #e5e9ef}
.nav{max-width:1180px;margin:auto;min-height:55px;padding:0 24px;display:flex;align-items:center;gap:34px}
.brand{display:flex;align-items:center;gap:9px;font-size:21px;font-weight:800;letter-spacing:-.6px;white-space:nowrap}
.brand-icon{width:34px;height:34px;border-radius:10px;background:#d4d80c;display:grid;place-items:center;font-size:20px;color:#172033}
.brand-name span{color:#a5a900}
.location{font-size:9px;color:#94a3b8;line-height:1.4;min-width:205px}
.location strong{display:block;color:#172033;font-size:11px}
.search{flex:1;max-width:390px}
.search input{width:100%;height:34px;border:0;border-radius:20px;padding:0 20px;background:#f0f4f8;font-size:11px;outline:none}
.login{margin-left:auto;background:#d4d80c;padding:10px 23px;border-radius:22px;font-size:11px;font-weight:700}
.container{max-width:1180px;margin:auto;padding:19px 24px 60px}
.hero{min-height:160px;border:1.5px solid #d4d800;border-radius:15px;padding:22px 33px;background:#fffdf0}
.hero h1{font-size:26px;line-height:1.2;letter-spacing:-.5px;margin-bottom:7px}
.hero p{color:#80400e;font-size:12px;line-height:1.5;margin-bottom:16px}
.order-btn{display:inline-flex;align-items:center;gap:7px;background:#d4d80c;border-radius:22px;padding:9px 20px;font-size:11px;font-weight:700}
.section{margin-top:17px}
.section h2{font-size:17px;margin:0 0 15px 20px}
.categories{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:25px}
.category{min-height:98px;background:#fff8bf;border:1.5px solid #d4d800;border-radius:15px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:15px}
.category h3{font-size:19px;color:#80400e;margin-bottom:7px}
.category p{font-size:11px;color:#a0a300;font-weight:600}
.nearby-section{margin-top:25px}
.nearby{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px}
.outlet{background:#fff;border:1px solid #dce4ee;border-radius:15px;overflow:hidden}
.outlet-label{height:38px;background:#d4d80c;border-radius:14px;padding:0 17px;display:flex;align-items:center;font-size:12px;font-weight:800;color:#172033}
.outlet-body{padding:16px 16px 20px}
.outlet h3{font-size:13px;margin-bottom:7px}
.outlet-location{font-size:10px;color:#64748b;margin-bottom:12px}
.rating{font-size:11px;color:#64748b;font-weight:600;margin-bottom:17px}
.rating strong{color:#a2a600}
.menu-btn{height:32px;background:#fff7bd;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#80400e;font-size:11px;font-weight:700}
footer{display:none}
@media(max-width:760px){
.nav{flex-wrap:wrap;gap:12px;padding:9px 16px;height:auto}
.location{order:3;min-width:0}
.search{order:4;flex-basis:100%;max-width:none}
.login{margin-left:auto}
.container{padding:18px 16px 42px}
.nearby{grid-template-columns:1fr}
}
@media(max-width:520px){
.categories{grid-template-columns:1fr;gap:13px}
.hero{padding:22px 20px}
.hero h1{font-size:23px}
.section h2{margin-left:8px}
}
</style>
</head>
<body>
<header class="topbar">
<nav class="nav">
<a href="{{ url('/') }}" class="brand">
<span class="brand-icon">♨</span>
<span class="brand-name">Sabra<span>Eat</span></span>
</a>
<div class="location">Deliver to:<strong>Sabaragamuwa University / Belihuloya</strong></div>
<div class="search"><input type="search" placeholder="Search food, breakfast, bakery items..." aria-label="Search food, breakfast, bakery items"></div>
<a class="login" href="{{ url('/login') }}">Login</a>
</nav>
</header>

<main class="container">
<section class="hero">
<h1>Delicious Food Delivered Fast!</h1>
<p>Fresh meals from nearby campus outlets &amp; bakeries.</p>
<a class="order-btn" href="{{ url('/outlets') }}">Order Now →</a>
</section>

<section class="section">
<h2>Shop by Category</h2>
<div class="categories">
<a class="category" href="{{ url('/outlets') }}">
<h3>Food Items</h3>
<p>(Breakfast / Lunch / Dinner / Rice &amp; Curry)</p>
</a>
<a class="category" href="{{ url('/bakery') }}">
<h3>Bakery &amp; Snacks</h3>
<p>(Short Eats / Bread / Cakes / Beverages)</p>
</a>
</div>
</section>

<section class="section nearby-section">
<h2>Nearby Food Outlets</h2>
<div class="nearby">
<article class="outlet">
<div class="outlet-label">UVINDU FOOD CABIN</div>
<div class="outlet-body">
<h3>Uvindu Food Cabin</h3>
<p class="outlet-location">• Near the uni main gate • 5 mins</p>
<p class="rating"><strong>4.6</strong> (88 reviews)</p>
<a class="menu-btn" href="{{ url('/outlets') }}">View Menu →</a>
</div>
</article>

<article class="outlet">
<div class="outlet-label">MOHAN BAKERY</div>
<div class="outlet-body">
<h3>Mohan Bakery &amp; Sweets</h3>
<p class="outlet-location">• Near the uni main gate • 5 mins</p>
<p class="rating"><strong>4.7</strong> (89 reviews)</p>
<a class="menu-btn" href="{{ url('/bakery') }}">View Menu →</a>
</div>
</article>

<article class="outlet">
<div class="outlet-label">ROYAL BOX</div>
<div class="outlet-body">
<h3>Royal Box Restaurant</h3>
<p class="outlet-location">• Near the uni main gate • 5 mins</p>
<p class="rating"><strong>4.8</strong> (130 reviews)</p>
<a class="menu-btn" href="{{ url('/outlets') }}">View Menu →</a>
</div>
</article>
</div>
</section>
</main>
</body>