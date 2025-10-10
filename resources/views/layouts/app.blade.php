<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkillShare Komunitas')</title>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    @stack('styles')
</head>
<body>
    @php
        $currentRoute = Route::currentRouteName();
        $user = Auth::user();

        if ($user && $user->role === 'provider') {
            $menuItems = [
                ['label' => 'Profil & Portofolio', 'icon' => 'fas fa-user', 'route' => 'profile.index'],
                ['label' => 'Dashboard Provider', 'icon' => 'fas fa-home', 'route' => 'dashboard'],
                ['label' => 'Chat', 'icon' => 'fas fa-comments', 'route' => 'chat.index'],
                ['label' => 'Pesanan Masuk', 'icon' => 'fas fa-inbox', 'route' => 'orders.index'],
            ];
        } elseif ($user && $user->role === 'client') {
            $menuItems = [
                ['label' => 'Profil', 'icon' => 'fas fa-user', 'route' => 'profile.index'],
                ['label' => 'Beranda', 'icon' => 'fas fa-home', 'route' => 'dashboard'],
                ['label' => 'Favorit', 'icon' => 'fas fa-heart', 'route' => 'favorites.index'],
                ['label' => 'Chat', 'icon' => 'fas fa-comments', 'route' => 'chat.index'],
                ['label' => 'Pesanan Saya', 'icon' => 'fas fa-box', 'route' => 'myorders.index'],
            ];
        } else {
            $menuItems = [];
        }
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

            @auth
            <div class="text-center mb-3 user-info">
                <img src="{{ Auth::user()->profile_photo ?? asset('default-avatar.png') }}" 
                    alt="Foto Profil" class="rounded-circle mb-2 profile-photo" width="70" height="70">
                <div class="user-meta">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <small class="text-muted text-capitalize">{{ Auth::user()->role }}</small>
                </div>
            </div>
            @endauth

            <div>
                <nav class="menu-list">
                    @foreach ($menuItems as $item)
                        @php
                            $isActive = $currentRoute === $item['route'] || str_starts_with($currentRoute ?? '', "{$item['route']}.");
                        @endphp
                        <a href="{{ route($item['route']) }}"
                           class="menu-link {{ $isActive ? 'active' : '' }}"
                           data-bs-toggle="tooltip"
                           data-bs-placement="right"
                           title="{{ $item['label'] }}">
                            <i class="{{ $item['icon'] }}"></i>
                            <span class="menu-text">{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>

        <div class="logout-area">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
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

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));

        toggleSidebar.addEventListener('click', () => {
            tooltipList.forEach(t => t.hide());
        });
    </script>
    @stack('scripts')
</body>
</html>
