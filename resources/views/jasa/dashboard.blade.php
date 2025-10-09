@extends('layouts.app')

@section('title', 'Dashboard Penyedia Jasa')

@section('content')
<div class="container-fluid">
    <!-- Welcome Card -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card" style="border-left: 4px solid var(--primary-green);">
                <div class="card-body">
                    <h5 class="mb-2">Selamat Datang, Ahmad Rizki! 👋</h5>
                    <p class="text-muted mb-0">Kelola jasa dan pesanan Anda dengan mudah dari dashboard ini.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card stats-card h-100" style="border-left: 4px solid #41A67E;">
                <div class="card-body text-center p-4">
                    <div class="stats-icon mb-3" style="background: linear-gradient(135deg, #41A67E 0%, #6FC3A4 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-shopping-cart fa-2x" style="color: white;"></i>
                    </div>
                    <h6 class="text-muted mb-2">Total Pesanan</h6>
                    <h2 class="mb-0 fw-bold" style="color: #41A67E;">15</h2>
                    <small class="text-muted">+3 bulan ini</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card h-100" style="border-left: 4px solid #3B82F6;">
                <div class="card-body text-center p-4">
                    <div class="stats-icon mb-3" style="background: linear-gradient(135deg, #3B82F6 0%, #60A5FA 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-briefcase fa-2x" style="color: white;"></i>
                    </div>
                    <h6 class="text-muted mb-2">Jasa Aktif</h6>
                    <h2 class="mb-0 fw-bold" style="color: #3B82F6;">8</h2>
                    <small class="text-muted">Sedang tayang</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card h-100" style="border-left: 4px solid #F59E0B;">
                <div class="card-body text-center p-4">
                    <div class="stats-icon mb-3" style="background: linear-gradient(135deg, #F59E0B 0%, #FBBF24 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-star fa-2x" style="color: white;"></i>
                    </div>
                    <h6 class="text-muted mb-2">Rating Rata-rata</h6>
                    <h2 class="mb-0 fw-bold" style="color: #F59E0B;">4.7 ⭐</h2>
                    <small class="text-muted">Dari 23 ulasan</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stats-card h-100" style="border-left: 4px solid #8B5CF6;">
                <div class="card-body text-center p-4">
                    <div class="stats-icon mb-3" style="background: linear-gradient(135deg, #8B5CF6 0%, #A78BFA 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                        <i class="fas fa-money-bill-wave fa-2x" style="color: white;"></i>
                    </div>
                    <h6 class="text-muted mb-2">Pendapatan Bulan Ini</h6>
                    <h2 class="mb-0 fw-bold" style="color: #8B5CF6;">Rp 2.5jt</h2>
                    <small class="text-muted">Estimasi</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Row -->
    <div class="row g-4">
        <!-- Recent Orders -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-inbox me-2"></i>Pesanan Terbaru</h6>
                    <a href="#" class="btn btn-sm" style="background-color: #41A67E; color: white;">Lihat Semua</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead style="background-color: var(--sidebar-bg);">
                                <tr>
                                    <th class="border-0 px-4 py-3">Klien</th>
                                    <th class="border-0 py-3">Jasa</th>
                                    <th class="border-0 py-3">Tanggal</th>
                                    <th class="border-0 py-3">Status</th>
                                    <th class="border-0 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Siti+Nurhaliza&background=41A67E&color=fff" 
                                                 class="rounded-circle me-2" width="35" height="35" alt="Avatar">
                                            <span>Siti Nurhaliza</span>
                                        </div>
                                    </td>
                                    <td class="py-3">Les Matematika SD</td>
                                    <td class="py-3">15 Jan 2025</td>
                                    <td class="py-3">
                                        <span class="badge bg-warning">Menunggu</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm" style="background-color: var(--primary-green); color: white;">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=3B82F6&color=fff" 
                                                 class="rounded-circle me-2" width="35" height="35" alt="Avatar">
                                            <span>Budi Santoso</span>
                                        </div>
                                    </td>
                                    <td class="py-3">Desain Logo Perusahaan</td>
                                    <td class="py-3">12 Jan 2025</td>
                                    <td class="py-3">
                                        <span class="badge bg-primary">Dikerjakan</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm" style="background-color: var(--primary-green); color: white;">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=F59E0B&color=fff" 
                                                 class="rounded-circle me-2" width="35" height="35" alt="Avatar">
                                            <span>Dewi Lestari</span>
                                        </div>
                                    </td>
                                    <td class="py-3">Service Laptop Gaming</td>
                                    <td class="py-3">10 Jan 2025</td>
                                    <td class="py-3">
                                        <span class="badge bg-success">Selesai</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm" style="background-color: var(--primary-green); color: white;">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Agus+Wijaya&background=8B5CF6&color=fff" 
                                                 class="rounded-circle me-2" width="35" height="35" alt="Avatar">
                                            <span>Agus Wijaya</span>
                                        </div>
                                    </td>
                                    <td class="py-3">Pembuatan Website Toko</td>
                                    <td class="py-3">08 Jan 2025</td>
                                    <td class="py-3">
                                        <span class="badge bg-info">Diterima</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm" style="background-color: var(--primary-green); color: white;">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Rina+Fitriani&background=EF4444&color=fff" 
                                                 class="rounded-circle me-2" width="35" height="35" alt="Avatar">
                                            <span>Rina Fitriani</span>
                                        </div>
                                    </td>
                                    <td class="py-3">Fotografi Event Pernikahan</td>
                                    <td class="py-3">05 Jan 2025</td>
                                    <td class="py-3">
                                        <span class="badge bg-success">Selesai</span>
                                    </td>
                                    <td class="py-3">
                                        <a href="#" class="btn btn-sm" style="background-color: var(--primary-green); color: white;">Detail</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions & Recent Reviews -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="mb-0"><i class="fas fa-bolt me-2"></i>Aksi Cepat</h6>
                </div>
                <div class="card-body">
                    <a href="#" class="btn w-100 mb-2" style="background-color: var(--primary-green); color: white;">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Jasa Baru
                    </a>
                    <a href="#" class="btn w-100 mb-2" style="background-color: #3B82F6; color: white;">
                        <i class="fas fa-edit me-2"></i>Kelola Jasa
                    </a>
                    <a href="#" class="btn w-100" style="background-color: #F5F7F6; color: var(--text-dark); border: 1px solid var(--border-color);">
                        <i class="fas fa-user-edit me-2"></i>Edit Profil
                    </a>
                </div>
            </div>

            <!-- Recent Reviews -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"><i class="fas fa-star me-2"></i>Ulasan Terbaru</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <strong class="d-block">Siti Nurhaliza</strong>
                                <small class="text-muted">2 hari yang lalu</small>
                            </div>
                            <div class="text-warning">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="mb-0 small">Pelayanan sangat memuaskan! Guru lesnya sabar dan materi mudah dipahami.</p>
                    </div>
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <strong class="d-block">Budi Santoso</strong>
                                <small class="text-muted">5 hari yang lalu</small>
                            </div>
                            <div class="text-warning">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="mb-0 small">Desain logonya keren banget, sesuai ekspektasi. Recommended!</p>
                    </div>
                    <div class="mb-0">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <strong class="d-block">Dewi Lestari</strong>
                                <small class="text-muted">1 minggu yang lalu</small>
                            </div>
                            <div class="text-warning">
                                ⭐⭐⭐⭐☆
                            </div>
                        </div>
                        <p class="mb-0 small">Laptop jadi lancar lagi. Terima kasih atas perbaikannya yang cepat!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
    .stats-card {
        transition: all 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .stats-icon {
        transition: all 0.3s ease;
    }
    
    .stats-card:hover .stats-icon {
        transform: scale(1.1);
    }
</style>
@endsection

@endsection