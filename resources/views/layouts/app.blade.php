<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillShare Komunitas')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
            margin: 0;
            background-color: var(--light-bg);
            color: var(--text-dark);
        }

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 260px;
            background-color: var(--white);
            border-right: 1px solid var(--border-color);
            box-shadow: 0 0 18px rgba(0, 0, 0, 0.04);
            z-index: 1010;
            padding: 28px 20px;
            display: flex;
            flex-direction: column;
            gap: 24px;
            transition: width 0.2s ease;
        }

        .sidebar.collapsed {
            width: 90px;
        }

        .sidebar .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            color: var(--primary-green);
            font-size: 20px;
            margin: 0;
        }

        .sidebar .toggle-sidebar {
            align-self: flex-end;
            background: transparent;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 6px 10px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .sidebar .toggle-sidebar:hover {
            background-color: var(--sidebar-bg);
            color: var(--primary-green);
        }

        .menu-title {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #94A3B8;
            margin: 8px 0 12px;
        }

        .menu-list {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 10px;
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .menu-link i {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }

        .menu-link:hover,
        .menu-link.active {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .logout-area {
            margin-top: auto;
        }

        .logout-area button,
        .logout-area a {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
            border-radius: 10px;
            padding: 12px 16px;
            border: 1px solid var(--primary-green);
            color: var(--primary-green);
            background-color: transparent;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .logout-area button:hover,
        .logout-area a:hover {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .main-content {
            margin-left: 260px;
            padding: 32px;
            min-height: 100vh;
            transition: margin-left 0.2s ease, padding 0.2s ease;
        }

        .main-content.expanded {
            margin-left: 90px;
        }

        @media (max-width: 992px) {
            .sidebar {
                position: fixed;
                width: 100%;
                height: auto;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 12px;
                padding: 20px;
            }

            .menu-title {
                width: 100%;
                margin-bottom: 0;
            }

            .menu-list {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 8px;
            }

            .menu-link {
                flex: 1 1 calc(50% - 8px);
                justify-content: center;
            }

            .logout-area {
                width: 100%;
            }

            .main-content,
            .main-content.expanded {
                margin-left: 0;
                padding-top: 220px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    @php
        $currentRoute = Route::currentRouteName();
        $menuItems = [
            ['label' => 'Dashboard', 'icon' => 'fas fa-home', 'route' => 'dashboard'],
            ['label' => 'Profil', 'icon' => 'fas fa-user', 'route' => 'profile.index'],
            ['label' => 'Pesanan Masuk', 'icon' => 'fas fa-inbox', 'route' => 'orders.index'],
            ['label' => 'Chat', 'icon' => 'fas fa-comments', 'route' => 'chat.index'],
        ];
    @endphp

    <aside class="sidebar" id="sidebar">
        <div class="d-flex flex-column gap-3 w-100">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="brand mb-0">
                    <i class="fas fa-seedling"></i>
                    SkillShare
                </h4>
                <button class="toggle-sidebar" id="toggleSidebar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <div>
                <p class="menu-title mb-2">Menu</p>
                <nav class="menu-list">
                    @foreach ($menuItems as $item)
                        @php
                            $isActive = $currentRoute === $item['route'] || str_starts_with($currentRoute ?? '', "{$item['route']}.");
                        @endphp
                        <a href="{{ route($item['route']) }}" class="menu-link {{ $isActive ? 'active' : '' }}">
                            <i class="{{ $item['icon'] }}"></i>
                            <span class="menu-text">{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>

        <div class="logout-area">
            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf
                    <button type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        Keluar
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </a>
            @endauth
        </div>
    </aside>

    <main class="main-content" id="mainContent">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleSidebar = document.getElementById('toggleSidebar');

        if (toggleSidebar) {
            toggleSidebar.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
