<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillShare') - SkillShare Komunitas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdY2kvHn+1hp+7Z9N5LaOFb3gez1BDY6E8wGZ1SJ8uy7UFp3p3lAKem8B5wBn4E7YBxZAP7rGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --primary-green: #41A67E;
            --light-green: #BEE3D2;
            --sidebar-bg: #F5F7F6;
            --text-dark: #2E3A35;
            --light-bg: #FAFBFB;
            --white: #ffffff;
            --border-color: #E5E9E8;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-dark);
            margin: 0;
            overflow-x: hidden;
        }

        header {
            background-color: var(--white);
            border-bottom: 1px solid var(--border-color);
            padding: 12px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        .brand {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-green);
            text-decoration: none;
        }

        .auth-links a,
        .auth-links form button {
            font-weight: 500;
            margin-left: 16px;
        }

        .auth-links form {
            display: inline;
        }

        .auth-links button {
            background-color: transparent;
            border: 1px solid var(--primary-green);
            color: var(--primary-green);
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .auth-links button:hover {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .layout {
            display: flex;
            min-height: calc(100vh - 70px);
        }

        .sidebar {
            width: 260px;
            background-color: var(--white);
            border-right: 1px solid var(--border-color);
            padding: 28px 20px;
        }

        .sidebar .menu-title {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 600;
            color: #94A3B8;
            margin-bottom: 18px;
            letter-spacing: 0.08em;
        }

        .nav-link-menu {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            color: var(--text-dark);
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 8px;
            font-weight: 500;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .nav-link-menu i {
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .nav-link-menu:hover,
        .nav-link-menu.active {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .content-auth {
            flex: 1;
            padding: 32px;
        }

        .content-guest {
            flex: 1;
            display: flex;
            justify-content: center;
            padding: 48px 16px;
        }

        .guest-wrapper {
            width: 100%;
            max-width: 480px;
        }

        @media (max-width: 992px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
            }

            .nav-link-menu {
                flex: 1 1 calc(50% - 16px);
            }

            .content-auth {
                padding: 24px 16px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    @php
        $routeName = Route::currentRouteName();
        $isGuestPage = in_array($routeName, ['login', 'register']);
    @endphp

    <header>
        <a href="{{ route('home') }}" class="brand">SkillShare</a>
        <div class="auth-links">
            @auth
                <span class="text-muted me-2">Hai, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </header>

    <div class="layout">
        @unless ($isGuestPage)
            <aside class="sidebar">
                <div class="menu-title">Menu</div>
                <nav class="d-flex flex-column">
                    <a href="{{ route('dashboard') }}" class="nav-link-menu {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-gauge"></i> Dashboard
                    </a>
                    <a href="{{ route('profile.index') }}" class="nav-link-menu {{ request()->routeIs('profile.index') ? 'active' : '' }}">
                        <i class="fas fa-user-circle"></i> Profil
                    </a>
                    <a href="{{ route('orders.index') }}" class="nav-link-menu {{ request()->routeIs('orders.index') ? 'active' : '' }}">
                        <i class="fas fa-inbox"></i> Pesanan Masuk
                    </a>
                    <a href="{{ route('chat.index') }}" class="nav-link-menu {{ request()->routeIs('chat.index') ? 'active' : '' }}">
                        <i class="fas fa-comments"></i> Chat
                    </a>
                </nav>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="mt-auto pt-3">
                        @csrf
                        <button type="submit" class="btn w-100 d-flex align-items-center justify-content-center gap-2"
                                style="background-color: var(--primary-green); color: var(--white);">
                            <i class="fas fa-sign-out-alt"></i> Keluar
                        </button>
                    </form>
                @endauth
            </aside>
        @endunless

        <main class="{{ $isGuestPage ? 'content-guest' : 'content-auth' }}">
            <div class="{{ $isGuestPage ? 'guest-wrapper' : '' }}">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>
