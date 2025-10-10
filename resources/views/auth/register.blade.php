<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - SkillShare Komunitas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="auth-body">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg auth-card">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4 fw-bold text-primary-custom">Daftar Akun</h3>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold mb-3">Daftar sebagai:</label>
                                <div class="d-flex justify-content-center gap-3 flex-wrap">
                                    <label class="card role-card p-3 flex-fill text-center border border-2 rounded-4" style="cursor:pointer;">
                                        <input type="radio" name="role" value="provider" class="d-none" required>
                                        <i class="fas fa-briefcase fa-2x mb-2 icon-role"></i>
                                        <h6 class="fw-bold">Penyedia Jasa</h6>
                                        <small>Bagikan keahlianmu</small>
                                    </label>

                                    <label class="card role-card p-3 flex-fill text-center border border-2 rounded-4" style="cursor:pointer;">
                                        <input type="radio" name="role" value="client" class="d-none" required>
                                        <i class="fas fa-search fa-2x mb-2 icon-role"></i>
                                        <h6 class="fw-bold">Pencari Jasa</h6>
                                        <small>Cari bantuan dari ahli</small>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 fw-semibold text-white py-2">
                                Daftar Sekarang
                            </button>

                            <div class="text-center mt-3">
                                <p class="mb-0">Sudah punya akun?
                                    <a href="{{ route('login') }}" class="text-link">Masuk di sini</a>
                                </p>
                            </div>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    document.querySelectorAll('.role-card').forEach(card => {
        card.addEventListener('click', () => {
            document.querySelectorAll('.role-card').forEach(c => c.classList.remove('active'));
            card.classList.add('active');
            card.querySelector('input').checked = true;
            console.log("Role dipilih:", card.querySelector('input').value);
        });
    });
</script>


</body>
</html>
