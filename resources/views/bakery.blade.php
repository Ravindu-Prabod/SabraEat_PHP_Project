
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SabraEat - Bakery & Short Eats Shops</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #f7f9fc;
            color: #172033;
        }

        /* Header */
        .header {
            height: 54px;
            background-color: #ffffff;
            border-bottom: 1px solid #e1e7ef;
            display: flex;
            align-items: center;
            padding: 0 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 20px;
            font-weight: bold;
            color: #172033;
        }

        .logo-icon {
            width: 34px;
            height: 34px;
            background-color: #d6d500;
            border-radius: 11px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
        }

        /* Main Content */
        .container {
            max-width: 950px;
            margin: 0 auto;
            padding: 18px 0;
        }

        /* Back to Home */
        .back-link {
            display: inline-block;
            text-decoration: none;
            color: #85420c;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 13px;
        }

        .back-link:hover {
            color: #b45c10;
        }

        /* Banner */
        .banner {
            background-color: #fff9bd;
            border: 1.5px solid #d6d500;
            border-radius: 15px;
            padding: 11px 20px;
            min-height: 81px;
            margin-bottom: 17px;
        }

        .banner h1 {
            color: #803b16;
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .banner p {
            color: #b5b000;
            font-size: 12px;
        }

        /* Bakery Cards */
        .bakery-list {
            display: grid;
            grid-template-columns: repeat(2, 294px);
            gap: 21px;
        }

        .bakery-card {
            background-color: #ffffff;
            border: 1px solid #dce4ee;
            border-radius: 15px;
            overflow: hidden;
            min-height: 190px;
        }

        .card-header {
            background-color: #d6d500;
            padding: 13px 18px;
            font-size: 11px;
            font-weight: bold;
            color: #172033;
        }

        .card-body {
            padding: 17px;
        }

        .card-body h2 {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 7px;
            color: #172033;
        }

        .location {
            font-size: 11px;
            color: #7b8ca7;
            margin-bottom: 13px;
        }

        .rating {
            font-size: 12px;
            font-weight: bold;
            color: #71819a;
            margin-bottom: 17px;
        }

        .rating span {
            color: #a9a500;
        }

        /* Menu Button */
        .menu-button {
            display: block;
            text-decoration: none;
            text-align: center;
            background-color: #fff8bd;
            color: #814315;
            font-size: 11px;
            font-weight: bold;
            padding: 9px;
            border-radius: 14px;
            transition: 0.2s;
        }

        .menu-button:hover {
            background-color: #f3e987;
        }

        /* Responsive Design */
        @media (max-width: 650px) {
            .container {
                padding: 18px 15px;
            }

            .bakery-list {
                grid-template-columns: 1fr;
            }

            .bakery-card {
                width: 100%;
            }

            .banner h1 {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">
            <div class="logo-icon">♨</div>
            <span>SabraEat</span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">

        <!-- Back to Home -->
        <a href="{{ url('/') }}" class="back-link">
            ← Back to Home
        </a>

        <!-- Bakery Banner -->
        <section class="banner">
            <h1>Bakery &amp; Short Eats Shops</h1>
            <p>
                Enjoy oven-fresh pastries, soft buns, and savory snacks anytime.
            </p>
        </section>

        <!-- Bakery Shop Cards -->
        <section class="bakery-list">

            <!-- Mohan Bakery -->
            <div class="bakery-card">

                <div class="card-header">
                    MOHAN BAKERY
                </div>

                <div class="card-body">

                    <h2>Mohan Bakery &amp; Sweets</h2>

                    <p class="location">
                        • Near the university main gate &nbsp; • 5 mins
                    </p>

                    <p class="rating">
                        <span>4.7</span> (89 reviews)
                    </p>

                    <a href="#" class="menu-button">
                        View Bakery Menu →
                    </a>

                </div>
            </div>

            <!-- Liyanage Bakery -->
            <div class="bakery-card">

                <div class="card-header">
                    LIYANAGE BAKERY
                </div>

                <div class="card-body">

                    <h2>Liyanage Bakers &amp; Cafe</h2>

                    <p class="location">
                        • Pambahinna Junction &nbsp; • 10 mins
                    </p>

                    <p class="rating">
                        <span>4.9</span> (150 reviews)
                    </p>

                    <a href="#" class="menu-button">
                        View Bakery Menu →
                    </a>

                </div>
            </div>

        </section>

    </main>

</body>
</html>
