<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SabraEat')</title>
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f8fafc; color: #0f172a; }

        /* Navbar */
        .navbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 12px 48px; }
        .brand { font-size: 22px; font-weight: 700; text-decoration: none; color: #0f172a; }
        .brand span { color: #9a9c0c; }

        /* Card */
        .wrapper { display: flex; justify-content: center; padding: 22px 16px 48px; }
        .card { width: 100%; max-width: 480px; background: #fff; border: 1px solid #e2e8f0; border-radius: 28px; padding: 24px 40px 44px; }
        .card h1 { text-align: center; font-size: 24px; }
        .subtitle { text-align: center; color: #64748b; font-size: 14px; margin-top: 6px; }

        /* Tabs */
        .tabs { display: flex; margin-top: 22px; background: #f1f5f9; border-radius: 999px; padding: 4px; }
        .tab { flex: 1; text-align: center; text-decoration: none; padding: 10px 0; border-radius: 999px; font-size: 13px; font-weight: 600; color: #64748b; }
        .tab.active { background: #d1d316; color: #0f172a; }

        /* Form */
        .form-group { margin-top: 14px; }
        label { display: block; font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
        input, select { width: 100%; height: 44px; padding: 0 16px; border: 1.5px solid #dbe3ee; border-radius: 12px; background: #f8fafc; font: 14px 'Inter', sans-serif; outline: none; }
        input:focus, select:focus { border-color: #d1d316; }

        .btn { width: 100%; height: 48px; margin-top: 28px; border: 0; border-radius: 14px; cursor: pointer; background: #d1d316; color: #0f172a; font: 700 14px 'Inter', sans-serif; }

        .login-link { text-align: center; margin-top: 22px; font-size: 13px; color: #64748b; }
        .login-link a { color: #7c3f00; font-weight: 700; text-decoration: none; }

        .alert { margin-top: 16px; padding: 10px 14px; border-radius: 10px; background: #fef2f2; color: #b91c1c; font-size: 13px; }
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