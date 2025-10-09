@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container-fluid">
    <!-- Profile Header Card -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="https://ui-avatars.com/api/?name=Ahmad+Rizki&size=150&background=41A67E&color=fff"
                                 class="rounded-circle mb-3" width="120" height="120" alt="Profile">
                            <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                                <i class="fas fa-camera me-1"></i> Ubah Foto
                            </button>
                        </div>
                        <div class="col-md-7">
                            <h3 class="mb-2">Ahmad Rizki</h3>
                            <p class="text-muted mb-2"><i class="fas fa-envelope me-2"></i>ahmad.rizki@email.com</p>
                            <p class="text-muted mb-2"><i class="fas fa-phone me-2"></i>+62 812-3456-7890</p>
                            <p class="text-muted mb-3"><i class="fas fa-map-marker-alt me-2"></i>Cimahi, Jawa Barat</p>
                            <div class="d-flex gap-2">
                                <span class="badge" style="background-color: #41A67E;">⭐ 4.7 Rating</span>
                                <span class="badge" style="background-color: #3B82F6;">📦 15 Pesanan</span>
                                <span class="badge" style="background-color: #F59E0B;">✅ Verified</span>
                            </div>
                        </div>
                        <div class="col-md-3 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                <i class="fas fa-edit me-2"></i>Edit Profil
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button">
                <i class="fas fa-user me-2"></i>Tentang Saya
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button">
                <i class="fas fa-star me-2"></i>Keahlian
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="portfolio-tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button">
                <i class="fas fa-briefcase me-2"></i>Portofolio
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button">
                <i class="fas fa-list me-2"></i>Jasa yang Ditawarkan
            </button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="profileTabsContent">
        <!-- About Tab -->
        <div class="tab-pane fade show active" id="about" role="tabpanel">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-info-circle me-2"></i>Tentang Saya</h6>
                    <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
                <div class="card-body">
                    <p class="mb-3">Halo! Saya Ahmad Rizki, seorang profesional dengan pengalaman 5+ tahun di bidang teknologi dan pendidikan. Saya passionate dalam membantu orang lain mengembangkan skill mereka.</p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="info-item p-3" style="background-color: #F5F7F6; border-radius: 8px;">
                                <small class="text-muted d-block mb-1">Pengalaman</small>
                                <strong>5+ Tahun</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item p-3" style="background-color: #F5F7F6; border-radius: 8px;">
                                <small class="text-muted d-block mb-1">Bergabung Sejak</small>
                                <strong>Januari 2023</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item p-3" style="background-color: #F5F7F6; border-radius: 8px;">
                                <small class="text-muted d-block mb-1">Bahasa</small>
                                <strong>Indonesia, Inggris</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item p-3" style="background-color: #F5F7F6; border-radius: 8px;">
                                <small class="text-muted d-block mb-1">Waktu Respon</small>
                                <strong>< 2 Jam</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Tab -->
        <div class="tab-pane fade" id="skills" role="tabpanel">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-star me-2"></i>Keahlian Saya</h6>
                    <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;" data-bs-toggle="modal" data-bs-target="#addSkillModal">
                        <i class="fas fa-plus me-1"></i>Tambah Keahlian
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Skill Item 1 -->
                        <div class="col-md-6">
                            <div class="skill-card p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">Web Development</h6>
                                        <small class="text-muted">Laravel, PHP, JavaScript</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 90%; background-color: #41A67E;"></div>
                                </div>
                                <small class="text-muted">Expert - 90%</small>
                            </div>
                        </div>

                        <!-- Skill Item 2 -->
                        <div class="col-md-6">
                            <div class="skill-card p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">UI/UX Design</h6>
                                        <small class="text-muted">Figma, Adobe XD</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 85%; background-color: #3B82F6;"></div>
                                </div>
                                <small class="text-muted">Advanced - 85%</small>
                            </div>
                        </div>

                        <!-- Skill Item 3 -->
                        <div class="col-md-6">
                            <div class="skill-card p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">Mengajar Matematika</h6>
                                        <small class="text-muted">SD, SMP, SMA</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 95%; background-color: #F59E0B;"></div>
                                </div>
                                <small class="text-muted">Expert - 95%</small>
                            </div>
                        </div>

                        <!-- Skill Item 4 -->
                        <div class="col-md-6">
                            <div class="skill-card p-3 border rounded">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h6 class="mb-1">Fotografi</h6>
                                        <small class="text-muted">Wedding, Product, Portrait</small>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar" style="width: 80%; background-color: #8B5CF6;"></div>
                                </div>
                                <small class="text-muted">Advanced - 80%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Tab -->
        <div class="tab-pane fade" id="portfolio" role="tabpanel">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-briefcase me-2"></i>Portofolio</h6>
                    <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;" data-bs-toggle="modal" data-bs-target="#addPortfolioModal">
                        <i class="fas fa-plus me-1"></i>Tambah Portofolio
                    </button>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <!-- Portfolio Item 1 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/41A67E/ffffff?text=Website+Toko+Online" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Website Toko Online</h6>
                                    <p class="small text-muted mb-3">E-commerce lengkap dengan payment gateway dan dashboard admin</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #41A67E;">Web Development</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 2 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/3B82F6/ffffff?text=Mobile+App+Design" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Mobile App Design</h6>
                                    <p class="small text-muted mb-3">UI/UX design untuk aplikasi mobile learning dengan 50+ screens</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #3B82F6;">UI/UX Design</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 3 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/F59E0B/ffffff?text=Wedding+Photography" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Wedding Photography</h6>
                                    <p class="small text-muted mb-3">Dokumentasi pernikahan outdoor dengan konsep natural & elegant</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #F59E0B;">Fotografi</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 4 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/8B5CF6/ffffff?text=Company+Profile" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Company Profile Website</h6>
                                    <p class="small text-muted mb-3">Website company profile modern dengan animasi dan CMS</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #8B5CF6;">Web Development</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 5 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/EF4444/ffffff?text=Logo+Design" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Brand Identity Design</h6>
                                    <p class="small text-muted mb-3">Logo dan brand guideline untuk startup teknologi</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #EF4444;">Graphic Design</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 6 -->
                        <div class="col-md-4">
                            <div class="card portfolio-card">
                                <img src="https://via.placeholder.com/400x300/10B981/ffffff?text=Private+Teaching" class="card-img-top" alt="Portfolio">
                                <div class="card-body">
                                    <h6 class="mb-2">Program Les Privat</h6>
                                    <p class="small text-muted mb-3">Mengajar matematika SMA dengan metode fun learning</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="badge" style="background-color: #10B981;">Pendidikan</span>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Lihat Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Tab -->
        <div class="tab-pane fade" id="services" role="tabpanel">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-list me-2"></i>Jasa yang Ditawarkan</h6>
                    <button class="btn btn-sm" style="background-color: var(--primary-green); color: white;" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                        <i class="fas fa-plus me-1"></i>Tambah Jasa
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background-color: #F5F7F6;">
                                <tr>
                                    <th>Nama Jasa</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Pembuatan Website Company Profile</strong><br>
                                        <small class="text-muted">Responsive, Modern Design, CMS</small>
                                    </td>
                                    <td><span class="badge" style="background-color: #41A67E;">Web Development</span></td>
                                    <td><strong>Rp 3.500.000</strong></td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-toggle-off me-2"></i>Aktifkan</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>UI/UX Design Mobile App</strong><br>
                                        <small class="text-muted">High Fidelity, Prototype, Design System</small>
                                    </td>
                                    <td><span class="badge" style="background-color: #3B82F6;">UI/UX Design</span></td>
                                    <td><strong>Rp 2.000.000</strong></td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-toggle-on me-2"></i>Nonaktifkan</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Les Privat Matematika</strong><br>
                                        <small class="text-muted">SD, SMP, SMA - Tatap Muka / Online</small>
                                    </td>
                                    <td><span class="badge" style="background-color: #F59E0B;">Pendidikan</span></td>
                                    <td><strong>Rp 100.000/jam</strong></td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-toggle-on me-2"></i>Nonaktifkan</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Fotografi Wedding</strong><br>
                                        <small class="text-muted">Full Day Coverage + Editing</small>
                                    </td>
                                    <td><span class="badge" style="background-color: #8B5CF6;">Fotografi</span></td>
                                    <td><strong>Rp 5.000.000</strong></td>
                                    <td><span class="badge bg-warning">Tidak Aktif</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-toggle-off me-2"></i>Aktifkan</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i>Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Profile -->
<div class="modal fade" id="editProfileModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                <h5 class="modal-title"><i class="fas fa-edit me-2"></i>Edit Profil</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="Ahmad Rizki">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="ahmad.rizki@email.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" value="+62 812-3456-7890">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" value="Cimahi, Jawa Barat">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Tentang Saya</label>
                            <textarea class="form-control" rows="4">Halo! Saya Ahmad Rizki, seorang profesional dengan pengalaman 5+ tahun di bidang teknologi dan pendidikan. Saya passionate dalam membantu orang lain mengembangkan skill mereka.</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Pengalaman (Tahun)</label>
                            <input type="number" class="form-control" value="5">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Bahasa</label>
                            <input type="text" class="form-control" value="Indonesia, Inggris">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn" style="background-color: var(--primary-green); color: white;">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Skill -->
<div class="modal fade" id="addSkillModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                <h5 class="modal-title"><i class="fas fa-plus me-2"></i>Tambah Keahlian</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Keahlian</label>
                        <input type="text" class="form-control" placeholder="Contoh: Web Development">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" placeholder="Contoh: Laravel, PHP, JavaScript">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Level Keahlian (%)</label>
                        <input type="range" class="form-range" min="0" max="100" value="50" id="skillRange">
                        <div class="d-flex justify-content-between">
                            <small>Beginner (0-50%)</small>
                            <small>Advanced (51-80%)</small>
                            <small>Expert (81-100%)</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select">
                            <option>Web Development</option>
                            <option>UI/UX Design</option>
                            <option>Fotografi</option>
                            <option>Pendidikan</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn" style="background-color: var(--primary-green); color: white;">Tambah Keahlian</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Portfolio -->
<div class="modal fade" id="addPortfolioModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                <h5 class="modal-title"><i class="fas fa-plus me-2"></i>Tambah Portofolio</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Judul Proyek</label>
                        <input type="text" class="form-control" placeholder="Contoh: Website Toko Online">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3" placeholder="Jelaskan detail proyek Anda..."></textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Kategori</label>
                            <select class="form-select">
                                <option>Web Development</option>
                                <option>UI/UX Design</option>
                                <option>Fotografi</option>
                                <option>Graphic Design</option>
                                <option>Pendidikan</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG (Max 2MB)</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link Proyek (Opsional)</label>
                        <input type="url" class="form-control" placeholder="https://example.com">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn" style="background-color: var(--primary-green); color: white;">Tambah Portofolio</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Service -->
<div class="modal fade" id="addServiceModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--primary-green); color: white;">
                <h5 class="modal-title"><i class="fas fa-plus me-2"></i>Tambah Jasa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Jasa</label>
                        <input type="text" class="form-control" placeholder="Contoh: Pembuatan Website Company Profile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Detail</label>
                        <textarea class="form-control" rows="3" placeholder="Jelaskan detail layanan yang Anda tawarkan..."></textarea>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Kategori</label>
                            <select class="form-select">
                                <option>Web Development</option>
                                <option>UI/UX Design</option>
                                <option>Fotografi</option>
                                <option>Pendidikan</option>
                                <option>Graphic Design</option>
                                <option>Video Editing</option>
                                <option>Digital Marketing</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Durasi Pengerjaan</label>
                            <input type="text" class="form-control" placeholder="Contoh: 2 Minggu">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option value="active">Aktif</option>
                                <option value="inactive">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Upload Gambar Jasa</label>
                        <input type="file" class="form-control" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG (Max 2MB)</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn" style="background-color: var(--primary-green); color: white;">Tambah Jasa</button>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
    .portfolio-card {
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .portfolio-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12) !important;
    }

    .portfolio-card img {
        transition: all 0.3s ease;
    }

    .portfolio-card:hover img {
        transform: scale(1.05);
    }

    .skill-card {
        transition: all 0.3s ease;
    }

    .skill-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transform: translateY(-3px);
    }

    .nav-tabs .nav-link {
        color: var(--text-dark);
        border: none;
        border-bottom: 3px solid transparent;
        font-weight: 500;
    }

    .nav-tabs .nav-link:hover {
        border-bottom-color: var(--light-green);
        color: var(--primary-green);
    }

    .nav-tabs .nav-link.active {
        color: var(--primary-green);
        background-color: transparent;
        border-bottom-color: var(--primary-green);
    }

    .info-item {
        transition: all 0.3s ease;
    }

    .info-item:hover {
        background-color: #E8F1ED !important;
        transform: translateY(-2px);
    }

    .table tbody tr {
        vertical-align: middle;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-footer {
        border-top: 1px solid var(--border-color);
    }
</style>
@endsection

@endsection
