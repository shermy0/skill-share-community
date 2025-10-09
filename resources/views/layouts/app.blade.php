<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Skill Share Community')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #111827;
        }
        header {
            background-color: #1f2937;
            color: #f9fafb;
        }
        .container {
            width: 100%;
            max-width: 480px;
            padding: 24px;
            margin: 0 auto;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }
        nav a {
            color: #f9fafb;
            text-decoration: none;
            font-weight: 600;
            margin-left: 16px;
        }
        nav form {
            display: inline;
            margin: 0;
        }
        nav button {
            background: transparent;
            border: 1px solid #f9fafb;
            color: #f9fafb;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        main {
            padding: 48px 16px;
        }
        h1 {
            font-size: 28px;
            margin-bottom: 16px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: 600;
            margin-bottom: 6px;
        }
        input {
            padding: 10px 12px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
            margin-bottom: 16px;
        }
        button.primary {
            background-color: #2563eb;
            color: #f9fafb;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 10px 40px rgba(15, 23, 42, 0.08);
        }
        .error {
            color: #b91c1c;
            margin-bottom: 12px;
        }
        .helper {
            text-align: center;
            margin-top: 16px;
        }
        .helper a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="{{ route('home') }}">Skill Share Community</a>
            </div>
            <div>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
