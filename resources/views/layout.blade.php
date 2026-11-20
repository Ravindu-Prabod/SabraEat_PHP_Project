<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SabraEat')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        /* Navbar */
        .navbar {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 12px 48px;
        }

        .brand {
            font-size: 22px;
            font-weight: 700;
            text-decoration: none;
            color: #0f172a;
        }

        .brand span {
            color: #9a9c0c;
        }

        /* Card */
        .wrapper {
            display: flex;
            justify-content: center;
            padding: 36px 16px 56px;
        }

        .card {
            width: 100%;
            max-width: 480px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 28px;
            padding: 32px 40px 44px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.04);
        }

        .card h1 {
            text-align: center;
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-top: 6px;
        }


        /* Tabs */
        .tabs {
            display: flex;
            margin-top: 22px;
            background: #f1f5f9;
            border-radius: 999px;
            padding: 4px;
        }

        .tab {
            flex: 1;
            text-align: center;
            text-decoration: none;
            padding: 10px 0;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
            color: #64748b;
        }

        .tab.active {
            background: #d1d316;
            color: #0f172a;
            font-weight: 700;
        }

        /* Form */
        .form-group {
            margin-top: 16px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            height: 44px;
            padding: 0 16px;
            border: 1.5px solid #dbe3ee;
            border-radius: 12px;
            background: #f8fafc;
            font: 14px 'Inter', sans-serif;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #d1d316;
            background: #fff;
        }

        .btn {
            width: 100%;
            height: 48px;
            margin-top: 24px;
            border: 0;
            border-radius: 14px;
            cursor: pointer;
            background: #d1d316;
            color: #0f172a;
            font: 700 14px 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .btn:hover {
            background: #babb14;
        }

        .login-link {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #64748b;
        }

        .login-link a {
            color: #7c3f00;
            font-weight: 700;
            text-decoration: none;
        }

        .alert {
            margin-top: 16px;
            padding: 10px 14px;
            border-radius: 10px;
            background: #fef2f2;
            color: #b91c1c;
            font-size: 13px;
            border: 1px solid #fecaca;
        }
    </style>
</head>

<body>

    <header class="navbar">
        <a href="{{ url('/') }}" class="brand">Sabra<span>Eat</span></a>
    </header>

    <main class="wrapper">
        @yield('content')
    </main>

</body>

</html>