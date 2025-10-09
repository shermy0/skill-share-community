@extends('layouts.app')
@section('title', 'pesanan saya')
@section('content')
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

        /* Order Card */
        .order-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .order-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .order-card.pending {
            border-left-color: #F59E0B;
        }

        .order-card.in-progress {
            border-left-color: #3B82F6;
        }

        .order-card.completed {
            border-left-color: #10B981;
        }

        .order-card.cancelled {
            border-left-color: #EF4444;
        }

        .order-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .order-details {
            flex: 1;
        }

        .order-price {
            font-weight: 600;
            color: var(--text-dark);
        }

        .order-meta {
            font-size: 0.85rem;
            color: #6B7280;
        }

        /* Filter Section */
        .filter-section {
            background-color: var(--white);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        /* Stats Cards */
        .stat-card {
            text-align: center;
            padding: 20px;
            border-radius: 12px;
            color: white;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card.pending {
            background: linear-gradient(135deg, #F59E0B, #FBBF24);
        }

        .stat-card.in-progress {
            background: linear-gradient(135deg, #3B82F6, #60A5FA);
        }

        .stat-card.completed {
            background: linear-gradient(135deg, #10B981, #34D399);
        }

        .stat-card.cancelled {
            background: linear-gradient(135deg, #EF4444, #F87171);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
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
            <a href="#">
                <i class="fas fa-home"></i>
                <span class="menu-text">Dashboard</span>
            </a>
            <a href="profile.html">
                <i class="fas fa-user"></i>
                <span class="menu-text">Profil</span>
            </a>
            <a href="#" class="active">
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
            <h4><i class="fas fa-inbox me-2"></i>Pesanan Masuk</h4>
        </div>

        <div class="container-fluid">
            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3 mb-3">
                    <div class="stat-card pending">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Menunggu Konfirmasi</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="stat-card in-progress">
                        <div class="stat-number">8</div>
                        <div class="stat-label">Dalam Pengerjaan</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="stat-card completed">
                        <div class="stat-number">24</div>
                        <div class="stat-label">Selesai</div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="stat-card cancelled">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Dibatalkan</div>
                    </div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="filter-section">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Status Pesanan</label>
                        <select class="form-select" id="statusFilter">
                            <option value="all">Semua Status</option>
                            <option value="pending">Menunggu Konfirmasi</option>
                            <option value="in-progress">Dalam Pengerjaan</option>
                            <option value="completed">Selesai</option>
                            <option value="cancelled">Dibatalkan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Tanggal Pesanan</label>
                        <select class="form-select" id="dateFilter">
                            <option value="all">Semua Waktu</option>
                            <option value="today">Hari Ini</option>
                            <option value="week">Minggu Ini</option>
                            <option value="month">Bulan Ini</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Cari Pesanan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari berdasarkan nama atau layanan...">
                            <button class="btn" type="button" style="background-color: var(--primary-green); color: white;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button class="btn w-100" style="background-color: var(--primary-green); color: white;">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Orders List -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-list me-2"></i>Daftar Pesanan Masuk</h6>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                            <i class="fas fa-sync-alt me-1"></i>Refresh
                        </button>
                        <button class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-download me-1"></i>Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Order Item 1 - Pending -->
                    <div class="order-card card mb-3 pending">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-1 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Sari+Wati&size=50&background=41A67E&color=fff"
                                         class="order-avatar" alt="Customer">
                                </div>
                                <div class="col-md-3 order-details">
                                    <h6 class="mb-1">Pembuatan Website Toko Online</h6>
                                    <p class="mb-1 order-meta">
                                        <i class="fas fa-user me-1"></i>Sari Wati
                                    </p>
                                    <p class="mb-0 order-meta">
                                        <i class="fas fa-clock me-1"></i>Dipesan: 2 jam lalu
                                    </p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="order-price">Rp 3.500.000</div>
                                    <small class="order-meta">Deadline: 14 Hari</small>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#acceptOrderModal">
                                            <i class="fas fa-check me-1"></i>Terima
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectOrderModal">
                                            <i class="fas fa-times me-1"></i>Tolak
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 2 - In Progress -->
                    <div class="order-card card mb-3 in-progress">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-1 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&size=50&background=3B82F6&color=fff"
                                         class="order-avatar" alt="Customer">
                                </div>
                                <div class="col-md-3 order-details">
                                    <h6 class="mb-1">UI/UX Design Aplikasi Mobile</h6>
                                    <p class="mb-1 order-meta">
                                        <i class="fas fa-user me-1"></i>Budi Santoso
                                    </p>
                                    <p class="mb-0 order-meta">
                                        <i class="fas fa-clock me-1"></i>Diterima: 3 hari lalu
                                    </p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="badge bg-primary">Dalam Pengerjaan</span>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="order-price">Rp 2.000.000</div>
                                    <small class="order-meta">Sisa: 5 Hari</small>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                                            <i class="fas fa-edit me-1"></i>Update Progress
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-comment me-1"></i>Chat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 3 - Completed -->
                    <div class="order-card card mb-3 completed">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-1 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Dewi+Anggraini&size=50&background=10B981&color=fff"
                                         class="order-avatar" alt="Customer">
                                </div>
                                <div class="col-md-3 order-details">
                                    <h6 class="mb-1">Les Privat Matematika SMA</h6>
                                    <p class="mb-1 order-meta">
                                        <i class="fas fa-user me-1"></i>Dewi Anggraini
                                    </p>
                                    <p class="mb-0 order-meta">
                                        <i class="fas fa-clock me-1"></i>Selesai: 1 hari lalu
                                    </p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="badge bg-success">Selesai</span>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="order-price">Rp 400.000</div>
                                    <small class="order-meta">4 Sesi @Rp 100.000</small>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-success">
                                            <i class="fas fa-star me-1"></i>Ulasan (4.8)
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </button>
                                        <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                                            <i class="fas fa-redo me-1"></i>Pesan Ulang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 4 - Pending -->
                    <div class="order-card card mb-3 pending">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-1 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Rizky+Perdana&size=50&background=F59E0B&color=fff"
                                         class="order-avatar" alt="Customer">
                                </div>
                                <div class="col-md-3 order-details">
                                    <h6 class="mb-1">Fotografi Product Makanan</h6>
                                    <p class="mb-1 order-meta">
                                        <i class="fas fa-user me-1"></i>Rizky Perdana
                                    </p>
                                    <p class="mb-0 order-meta">
                                        <i class="fas fa-clock me-1"></i>Dipesan: 5 jam lalu
                                    </p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="order-price">Rp 1.500.000</div>
                                    <small class="order-meta">Deadline: 7 Hari</small>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#acceptOrderModal">
                                            <i class="fas fa-check me-1"></i>Terima
                                        </button>
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectOrderModal">
                                            <i class="fas fa-times me-1"></i>Tolak
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Item 5 - In Progress -->
                    <div class="order-card card mb-3 in-progress">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-1 text-center">
                                    <img src="https://ui-avatars.com/api/?name=Maria+Ulfa&size=50&background=8B5CF6&color=fff"
                                         class="order-avatar" alt="Customer">
                                </div>
                                <div class="col-md-3 order-details">
                                    <h6 class="mb-1">Desain Logo Perusahaan</h6>
                                    <p class="mb-1 order-meta">
                                        <i class="fas fa-user me-1"></i>Maria Ulfa
                                    </p>
                                    <p class="mb-0 order-meta">
                                        <i class="fas fa-clock me-1"></i>Diterima: 2 hari lalu
                                    </p>
                                </div>
                                <div class="col-md-2 text-center">
                                    <span class="badge bg-primary">Dalam Pengerjaan</span>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="order-price">Rp 800.000</div>
                                    <small class="order-meta">Sisa: 3 Hari</small>
                                </div>
                                <div class="col-md-4 text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                                            <i class="fas fa-edit me-1"></i>Update Progress
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#orderDetailModal">
                                            <i class="fas fa-eye me-1"></i>Detail
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-comment me-1"></i>Chat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Modal Order Detail -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                    <h5 class="modal-title"><i class="fas fa-eye me-2"></i>Detail Pesanan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <h6 class="mb-3">Pembuatan Website Toko Online</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-2"><strong>Pelanggan:</strong> Sari Wati</p>
                                    <p class="mb-2"><strong>Tanggal Pesan:</strong> 15 Nov 2023, 14:30</p>
                                    <p class="mb-2"><strong>Deadline:</strong> 29 Nov 2023</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-2"><strong>Status:</strong> <span class="badge bg-warning">Menunggu Konfirmasi</span></p>
                                    <p class="mb-2"><strong>Total Harga:</strong> Rp 3.500.000</p>
                                    <p class="mb-2"><strong>Durasi Pengerjaan:</strong> 14 Hari</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="https://ui-avatars.com/api/?name=Sari+Wati&size=100&background=41A67E&color=fff"
                                 class="rounded-circle mb-2" alt="Customer">
                            <p class="mb-0">Sari Wati</p>
                            <small class="text-muted">⭐ 4.8 (32 ulasan)</small>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="mb-3">Detail Layanan</h6>
                        <div class="card">
                            <div class="card-body">
                                <p class="mb-2"><strong>Kategori:</strong> Web Development</p>
                                <p class="mb-2"><strong>Deskripsi:</strong> Pembuatan website toko online lengkap dengan payment gateway, dashboard admin, dan responsive design.</p>
                                <p class="mb-0"><strong>Fitur yang Diminta:</strong></p>
                                <ul class="mb-0">
                                    <li>Design responsive (mobile-friendly)</li>
                                    <li>Integrasi payment gateway (Midtrans)</li>
                                    <li>Dashboard admin untuk kelola produk</li>
                                    <li>System keranjang belanja</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="mb-3">Riwayat Pesanan</h6>
                        <div class="timeline">
                            <div class="d-flex mb-3">
                                <div class="timeline-badge bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                    <i class="fas fa-shopping-cart text-white" style="font-size: 0.8rem;"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-1"><strong>Pesanan Dibuat</strong></p>
                                    <p class="mb-0 text-muted">15 Nov 2023, 14:30 - Oleh Sari Wati</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="timeline-badge bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                    <i class="fas fa-clock text-white" style="font-size: 0.8rem;"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-1"><strong>Menunggu Konfirmasi</strong></p>
                                    <p class="mb-0 text-muted">Status saat ini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-success">Terima Pesanan</button>
                    <button type="button" class="btn btn-danger">Tolak Pesanan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Accept Order -->
    <div class="modal fade" id="acceptOrderModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                    <h5 class="modal-title"><i class="fas fa-check me-2"></i>Terima Pesanan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menerima pesanan ini?</p>
                    <div class="mb-3">
                        <label class="form-label">Estimasi Waktu Pengerjaan</label>
                        <input type="text" class="form-control" placeholder="Contoh: 14 hari">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catatan untuk Pelanggan (Opsional)</label>
                        <textarea class="form-control" rows="3" placeholder="Tulis pesan konfirmasi untuk pelanggan..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success">Ya, Terima Pesanan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Reject Order -->
    <div class="modal fade" id="rejectOrderModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #EF4444; color: white;">
                    <h5 class="modal-title"><i class="fas fa-times me-2"></i>Tolak Pesanan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menolak pesanan ini?</p>
                    <div class="mb-3">
                        <label class="form-label">Alasan Penolakan</label>
                        <select class="form-select">
                            <option>Jadwal penuh</option>
                            <option>Layanan tidak sesuai</option>
                            <option>Budget tidak sesuai</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan Tambahan (Opsional)</label>
                        <textarea class="form-control" rows="3" placeholder="Jelaskan alasan penolakan..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Ya, Tolak Pesanan</button>
                </div>
            </div>
        </div>
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

        // Filter functionality
        document.getElementById('statusFilter').addEventListener('change', function() {
            // In a real app, this would filter the orders
            console.log('Status filter changed to:', this.value);
        });

        document.getElementById('dateFilter').addEventListener('change', function() {
            // In a real app, this would filter the orders by date
            console.log('Date filter changed to:', this.value);
        });
    </script>

</body>

</html>
