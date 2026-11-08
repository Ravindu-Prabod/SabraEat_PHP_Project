<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SabraEat')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --lime: #d1d316;
            --lime-dark: #9a9c0c;
            --ink: #0f172a;
            --muted: #64748b;
            --border: #dbe3ee;
            --field-bg: #f8fafc;
            --brown: #7c3f00;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #f8fafc; color: var(--ink); min-height: 100vh; }

        /* Navbar */
        .navbar { background: #fff; border-bottom: 1px solid #e2e8f0; padding: 12px 48px; }
        .brand { display: inline-flex; align-items: center; gap: 12px; text-decoration: none; color: var(--ink); }
        .brand-icon { width: 40px; height: 40px; border-radius: 10px; background: var(--lime); display: grid; place-items: center; }
        .brand-icon svg { width: 22px; height: 22px; }
        .brand-name { font-size: 22px; font-weight: 700; }
        .brand-name span { color: var(--lime-dark); }

        /* Card */
        .wrapper { display: flex; justify-content: center; padding: 22px 16px 48px; }
        .card { width: 100%; max-width: 480px; background: #fff; border: 1px solid #e2e8f0; border-radius: 28px; padding: 24px 40px 44px; }
        .card h1 { text-align: center; font-size: 24px; font-weight: 700; }
        .subtitle { text-align: center; color: var(--muted); font-size: 14px; margin-top: 6px; }

        /* Tabs (links) */
        .tabs { display: flex; margin-top: 22px; background: #f1f5f9; border-radius: 999px; padding: 4px; }
        .tab { flex: 1; text-align: center; text-decoration: none; padding: 10px 0; border-radius: 999px;
               font: 600 13px 'Inter', sans-serif; color: var(--muted); transition: .2s; }
        .tab.active { background: var(--lime); color: var(--ink); }

        /* Form */
        .form-group { margin-top: 14px; }
        label { display: block; font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
        input, select {
            width: 100%; height: 44px; padding: 0 16px;
            border: 1.5px solid var(--border); border-radius: 12px; background: var(--field-bg);
            font: 400 14px 'Inter', sans-serif; color: var(--ink); outline: none; transition: .2s;
        }
        select {
            appearance: none; cursor: pointer;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='10'><path d='M0 0h14L7 10z' fill='%23999'/></svg>");
            background-repeat: no-repeat; background-position: right 16px center;
        }
        input::placeholder { color: #94a3b8; }
        input:focus, select:focus { border-color: var(--lime); box-shadow: 0 0 0 3px rgba(209, 211, 22, .25); }

        .btn { width: 100%; height: 48px; margin-top: 28px; border: 0; border-radius: 14px; cursor: pointer;
               background: var(--lime); color: var(--ink); font: 700 14px 'Inter', sans-serif; transition: .2s; }
        .btn:hover { filter: brightness(.95); }

        .login-link { text-align: center; margin-top: 22px; font-size: 13px; color: var(--muted); }
        .login-link a { color: var(--brown); font-weight: 700; text-decoration: none; }

        .alert { margin-top: 16px; padding: 10px 14px; border-radius: 10px; background: #fef2f2; color: #b91c1c; font-size: 13px; }

        @media (max-width: 520px) {
            .navbar { padding: 12px 20px; }
            .card { padding: 24px 22px 36px; }
        }
    </style>
</head>
<body>

    <header class="navbar">
        <a href="{{ url('/') }}" class="brand">
            <div class="brand-icon">
                <svg viewBox="0 0 24 24" fill="#0f172a">
                    <path d="M3 12h18a9 9 0 0 1-18 0z"/>
                    <path d="M8 3c0 1.5 1 1.5 1 3M12 2c0 1.5 1 1.5 1 3M16 3c0 1.5 1 1.5 1 3" stroke="#0f172a" stroke-width="1.6" fill="none" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="brand-name">Sabra<span>Eat</span></span>
        </a>
    </header>

    <main class="wrapper">
        @yield('content')
    </main>

</body>
</html>