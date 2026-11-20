<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SabraEat | Food Outlets</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Arial,Helvetica,sans-serif;background:#f6f8fb;color:#172033}
a{color:inherit;text-decoration:none}
.topbar{height:55px;background:#fff;border-bottom:1px solid #e5e9ef}
.nav{max-width:1180px;height:100%;margin:auto;padding:0 24px;display:flex;align-items:center}
.brand{display:flex;align-items:center;gap:9px;font-size:21px;font-weight:800;letter-spacing:-.6px;white-space:nowrap}
.brand-icon{width:34px;height:34px;border-radius:10px;background:#d4d80c;display:grid;place-items:center;font-size:20px;color:#172033}
.brand span:last-child{color:#a5a900}
.container{max-width:1180px;margin:auto;padding:17px 24px 60px}
.back{display:inline-block;color:#85420e;font-size:12px;font-weight:700;margin:0 0 14px 2px}
.banner{background:#fff8bf;border:1.5px solid #d4d800;border-radius:15px;padding:11px 24px;margin:0 0 18px}
.banner h1{font-size:20px;color:#80400e;margin-bottom:5px;letter-spacing:-.3px}
.banner p{font-size:11.5px;color:#a0a300;font-weight:600}
.outlet-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:16px}
.outlet-card{background:#fff;border:1px solid #dce4ee;border-radius:15px;overflow:hidden;min-width:0}
.outlet-label{height:32px;background:#d4d80c;border-radius:14px;padding:0 12px;display:flex;align-items:center;font-size:9px;font-weight:800;color:#172033}
.outlet-info{padding:11px 12px 13px}
.outlet-info h2{font-size:13px;line-height:1.3;margin-bottom:5px;color:#172033}
.location{font-size:9.5px;color:#64748b;line-height:1.4;margin-bottom:6px}
.rating{font-size:10px;color:#64748b;font-weight:600;margin-bottom:14px}
.rating strong{color:#a2a600}
.details{display:flex;align-items:center;justify-content:center;height:27px;background:#fff7bd;border-radius:18px;color:#80400e;font-size:10px;font-weight:700}
footer{display:none}
@media(max-width:900px){.outlet-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:520px){.nav{padding:0 16px}.container{padding:16px 14px 40px}.outlet-grid{grid-template-columns:1fr}.banner{padding:14px 16px}}
</style>
</head>
<body>
<header class="topbar">
<nav class="nav">
<a href="{{ url('/') }}" class="brand">
<span class="brand-icon">♨</span>
<span>Sabra<span>Eat</span></span>
</a>
</nav>
</header>

<main class="container">
<a class="back" href="{{ url('/') }}">← Back to Home</a>

<section class="banner">
<h1>Food Items &amp; Meals Outlets</h1>
<p>Choose from campus-preferred restaurants for breakfast, lunch, &amp; dinner.</p>
</section>

<section class="outlet-grid">
<article class="outlet-card">
<div class="outlet-label">SHAN FOOD CABIN</div>
<div class="outlet-info">
<h2>Shan Food Cabin</h2>
<p class="location">• Y junction&nbsp; • 10 mins</p>
<p class="rating"><strong>4.7</strong> (95 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">UVINDU FOOD CABIN</div>
<div class="outlet-info">
<h2>Uvindu Food Cabin</h2>
<p class="location">• Near the uni main gate&nbsp; • 5 mins</p>
<p class="rating"><strong>4.6</strong> (88 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">EAT ART FOOD</div>
<div class="outlet-info">
<h2>Eat Art Food Restaurant</h2>
<p class="location">• Near the uni main gate&nbsp; • 5 mins</p>
<p class="rating"><strong>4.9</strong> (140 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">JAYALANKA FOOD</div>
<div class="outlet-info">
<h2>Jayalanka Food</h2>
<p class="location">• Pambahinna&nbsp; • 10 mins</p>
<p class="rating"><strong>4.5</strong> (72 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">DAYASHANTHI</div>
<div class="outlet-info">
<h2>Dayashanthi Hotel</h2>
<p class="location">• Near the Sithum hostel&nbsp; • 8 mins</p>
<p class="rating"><strong>4.6</strong> (110 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">ROYAL BOX</div>
<div class="outlet-info">
<h2>Royal Box Restaurant</h2>
<p class="location">• Near the uni main gate&nbsp; • 5 mins</p>
<p class="rating"><strong>4.8</strong> (130 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">BHANINI FOOD</div>
<div class="outlet-info">
<h2>Bhanini Food Corner</h2>
<p class="location">• Y junction&nbsp; • 10 mins</p>
<p class="rating"><strong>4.7</strong> (85 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>

<article class="outlet-card">
<div class="outlet-label">SAMANALA LOUNGE</div>
<div class="outlet-info">
<h2>Samanala Lounge &amp; Dine</h2>
<p class="location">• Near the Dilani hostel&nbsp; • 12 mins</p>
<p class="rating"><strong>4.9</strong> (160 reviews)</p>
<span class="details">View Meals Menu →</span>
</div>
</article>
</section>
</main>
</body>
</html>
