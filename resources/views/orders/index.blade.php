@extends('layouts.app')

@section('title', 'Pesanan Masuk')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-semibold mb-1">Pesanan Masuk</h2>
                <p class="text-muted mb-0">Kelola semua pesanan terbaru dari klien Anda.</p>
            </div>
            <div>
                <button class="btn btn-outline-success">
                    <i class="fas fa-filter me-2"></i>Filter
                </button>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x mb-3 text-success"></i>
                    <h5 class="fw-semibold">Belum ada pesanan baru</h5>
                    <p class="text-muted mb-0">Pesanan yang masuk akan tampil di sini untuk Anda tindak lanjuti.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
