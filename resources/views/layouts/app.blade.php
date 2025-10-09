<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SkillShare Komunitas</title>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-green: #41A67E;
            --light-green: #BEE3D2;
            --sidebar-bg: #F5F7F6;
            --text-dark: #2E3A35;
            --light-bg: #FAFBFB;
            --accent: #6FC3A4;
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

        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 260px;
            background-color: var(--white);
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 1px solid var(--border-color);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.03);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar h4 {
            text-align: center;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 30px;
            font-size: 1.4rem;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed h4 {
            font-size: 1.2rem;
        }

        .sidebar .menu-text {
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .menu-text {
            display: none;
        }

        .toggle-sidebar {
            background-color: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-dark);
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.2rem;
            transition: all 0.2s ease;
            width: 100%;
        }

        .toggle-sidebar:hover {
            background-color: var(--sidebar-bg);
            color: var(--primary-green);
        }

        .sidebar a {
            color: var(--text-dark);
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            font-weight: 500;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }

        .sidebar a i {
            margin-right: 12px;
            font-size: 1.1rem;
            min-width: 20px;
        }

        .sidebar.collapsed a {
            justify-content: center;
            padding: 12px 10px;
        }

        .sidebar.collapsed a i {
            margin-right: 0;
        }

        .sidebar a:hover {
            background-color: var(--sidebar-bg);
            color: var(--primary-green);
        }

        .sidebar a.active {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .sidebar .logout {
            background-color: #f8f9fa;
            color: var(--text-dark);
            text-align: center;
            justify-content: center;
            margin-top: 20px;
            border: 1px solid var(--border-color);
        }

        .sidebar .logout:hover {
            background-color: #fee;
            color: #dc3545;
            border-color: #dc3545;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        .main-content.expanded {
            margin-left: 80px;
        }

        .header {
            background-color: var(--white);
            color: var(--text-dark);
            padding: 20px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            border-left: 4px solid var(--primary-green);
        }

        .header h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.4rem;
            color: var(--text-dark);
        }

        /* Card Styling */
        .card {
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
            background-color: var(--white);
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            background-color: var(--white);
            color: var(--text-dark);
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            font-weight: 600;
            padding: 15px 20px;
            border-bottom: 1px solid var(--border-color);
        }

        /* Table */
        .table {
            color: var(--text-dark);
        }

        .table thead {
            background-color: var(--sidebar-bg);
        }

        .table thead th {
            font-weight: 600;
            color: var(--text-dark);
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #FAFBFB;
        }

        /* Badge */
        .badge {
            padding: 6px 12px;
            font-weight: 500;
            font-size: 0.85rem;
        }

        /* Button */
        .btn {
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.2s ease;
            border: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
        }

        /* Alert */
        .alert {
            border-radius: 10px;
            border: none;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar.collapsed {
                width: 100%;
            }

            .main-content {
                margin-left: 0;
                padding: 20px;
            }

            .main-content.expanded {
                margin-left: 0;
            }

            .header h4 {
                font-size: 1.2rem;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }

        @yield('styles')
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div>
            <button class="toggle-sidebar" id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h4 class="menu-text">🌿 SkillShare</h4>
            <a href="#" class="active">
                <i class="fas fa-home"></i>
                <span class="menu-text">Dashboard</span>
            </a>
            <a href="{{ route('profil.index') }}">
                <i class="fas fa-user"></i>
                <span class="menu-text">Profil</span>
            </a>
            <a href="#">
                <i class="fas fa-inbox"></i>
                <span class="menu-text">Pesanan Masuk</span>
            </a>
            <a href="#">
                <i class="fas fa-comments"></i>
                <span class="menu-text">Chat</span>
            </a>
        </div>
        <a href="#" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="menu-text">Logout</span>
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div class="header">
            <h4>@yield('title')</h4>
        </div>

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle Sidebar
        const toggleBtn = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    </script>

    @yield('scripts')

</body>

</html>