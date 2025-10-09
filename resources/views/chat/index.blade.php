@extends('layouts.app')

@section('title', 'Chat')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-semibold mb-1">Chat</h2>
            <p class="text-muted mb-0">Bangun komunikasi cepat dengan klien dan mentor Anda.</p>
        </div>
        <button class="btn btn-success">
            <i class="fas fa-plus me-2"></i> Obrolan Baru
        </button>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="row g-0">
            <!-- Sidebar chat list -->
            <div class="col-lg-4 border-end" style="background-color: #F8FAFC;">
                <div class="p-4 border-bottom">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-search text-success"></i></span>
                        <input type="text" class="form-control" placeholder="Cari kontak atau percakapan...">
                    </div>
                </div>

                <div class="chat-list" style="max-height: 520px; overflow-y: auto;">
                    @foreach ([
                        ['name' => 'Rudi Hermawan', 'message' => 'Baik, saya kirimkan file revisinya siang ini ya.', 'time' => '10.24', 'badge' => 2, 'status' => 'online'],
                        ['name' => 'Mentor UI/UX', 'message' => 'Mockup kamu sudah bagus, tinggal perbaikan warna.', 'time' => '09.05', 'badge' => 0, 'status' => 'offline'],
                        ['name' => 'Budi Santoso', 'message' => 'Terima kasih sudah menyelesaikan pesanan tepat waktu!', 'time' => 'Kemarin', 'badge' => 0, 'status' => 'offline'],
                        ['name' => 'Komunitas Frontend', 'message' => 'Jangan lupa meetup besok jam 19.00 ya.', 'time' => 'Selasa', 'badge' => 4, 'status' => 'group'],
                    ] as $chat)
                        <a href="#" class="d-flex align-items-start gap-3 px-4 py-3 text-decoration-none border-bottom chat-item">
                            <div class="position-relative">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($chat['name']) }}&size=64&background=41A67E&color=ffffff"
                                     alt="{{ $chat['name'] }}" class="rounded-circle" width="48" height="48">
                                @if ($chat['status'] === 'online')
                                    <span class="position-absolute translate-middle p-2 bg-success border border-white rounded-circle" style="bottom: 0; right: -4px;"></span>
                                @endif
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <h6 class="mb-0 fw-semibold text-dark">{{ $chat['name'] }}</h6>
                                    <small class="text-muted">{{ $chat['time'] }}</small>
                                </div>
                                <p class="text-muted small mb-0" style="line-height: 1.3;">
                                    {{ $chat['message'] }}
                                </p>
                            </div>
                            @if ($chat['badge'] > 0)
                                <span class="badge bg-success rounded-pill">{{ $chat['badge'] }}</span>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Chat window -->
            <div class="col-lg-8">
                <div class="d-flex align-items-center justify-content-between px-4 py-3 border-bottom">
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=Rudi+Hermawan&size=64&background=41A67E&color=ffffff"
                             alt="Rudi Hermawan" class="rounded-circle" width="56" height="56">
                        <div>
                            <h5 class="mb-0 fw-semibold">Rudi Hermawan</h5>
                            <small class="text-success">Online</small>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-success btn-sm"><i class="fas fa-phone"></i></button>
                        <button class="btn btn-outline-success btn-sm"><i class="fas fa-video"></i></button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                </div>

                <div class="chat-body p-4" style="height: 520px; overflow-y: auto; background-color: #F8FAFC;">
                    <div class="text-center mb-4">
                        <span class="badge bg-light text-muted">Hari ini</span>
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Rudi+Hermawan&size=64&background=41A67E&color=ffffff"
                             alt="Rudi" class="rounded-circle" width="44" height="44">
                        <div>
                            <div class="bg-white p-3 rounded-4 shadow-sm mb-1" style="max-width: 420px;">
                                Halo Ahmad, bagaimana progress desain landing page-nya?
                            </div>
                            <small class="text-muted">10.15</small>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4 justify-content-end text-end">
                        <div>
                            <div class="bg-success text-white p-3 rounded-4 mb-1" style="max-width: 420px;">
                                Halo, Rudi! Sudah hampir selesai. Saya kirimkan preview awalnya dalam 30 menit ya.
                            </div>
                            <small class="text-muted d-block">10.18</small>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Ahmad+Rizki&size=64&background=0f172a&color=ffffff"
                             alt="Ahmad" class="rounded-circle" width="44" height="44">
                    </div>

                    <div class="d-flex gap-3 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Rudi+Hermawan&size=64&background=41A67E&color=ffffff"
                             alt="Rudi" class="rounded-circle" width="44" height="44">
                        <div>
                            <div class="bg-white p-3 rounded-4 shadow-sm mb-1" style="max-width: 420px;">
                                Mantap! Sekalian sertakan juga style guide warna biar tim dev mudah mengimplementasikannya.
                            </div>
                            <small class="text-muted">10.21</small>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-4 justify-content-end text-end">
                        <div>
                            <div class="bg-success text-white p-3 rounded-4 mb-1" style="max-width: 420px;">
                                Siap, akan saya lampirkan juga file style guide-nya. Terima kasih!
                            </div>
                            <small class="text-muted d-block">10.22</small>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Ahmad+Rizki&size=64&background=0f172a&color=ffffff"
                             alt="Ahmad" class="rounded-circle" width="44" height="44">
                    </div>
                </div>

                <div class="chat-input border-top">
                    <form class="d-flex align-items-center gap-3 px-4 py-3">
                        <button type="button" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-paperclip"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-image"></i>
                        </button>
                        <div class="flex-grow-1">
                            <input type="text" class="form-control rounded-pill" placeholder="Tulis pesan...">
                        </div>
                        <button type="submit" class="btn btn-success rounded-pill px-4">
                            Kirim <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .chat-item:hover {
        background-color: #E9F6F1;
    }
</style>
@endpush
