<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Home</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')
    

    <!-- ============================================== -->
    <!-- PAGE 1: BERANDA / HOME -->
    <!-- ============================================== -->
    <!-- Hero Section -->
    <header class="hero-section d-flex align-items-center">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-primary px-3 py-2 mb-3 text-uppercase tracking-wider">Selamat Datang di Portal Resmi</span>
                    <h1 class="display-4 fw-bold mb-3">Melayani dengan Profesionalisme, Integritas, dan Transparansi</h1>
                    <p class="lead mb-4">Mewujudkan pelayanan prima bagi seluruh masyarakat demi tercapainya tata kelola pemerintahan yang bersih, efektif, dan modern.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start">
                        <button class="btn btn-primary btn-lg px-4 py-2"><a href="{{ route('layanan-1') }}" class="text-white text-decoration-none">Mulai Layanan Izin</a></button>
                        <button class="btn btn-outline-light btn-lg px-4 py-2"><a href="{{ route('profil') }}" class="text-white text-decoration-none">Pelajari Profil Kami</a></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Quick Statistics -->
    <section class="bg-white py-4 shadow-sm">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold text-primary mb-0">150K+</h2>
                    <span class="text-muted small uppercase font-weight-bold">Pengguna Terlayani</span>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold text-primary mb-0">98%</h2>
                    <span class="text-muted small uppercase">Tingkat Kepuasan</span>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold text-primary mb-0">15 Mins</h2>
                    <span class="text-muted small uppercase">Rata-rata Respon</span>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold text-primary mb-0">24/7</h2>
                    <span class="text-muted small uppercase">Layanan Online</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Utama Quick Links -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-center">Akses Layanan Cepat</h2>
                <p class="text-muted">Pilih jenis layanan administrasi publik yang Anda butuhkan di bawah ini.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 card-custom text-center p-4">
                        <div class="icon-box mb-3 mx-auto bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-chat-left-dots-fill fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Layanan Pengaduan</h5>
                        <p class="text-muted small mb-4">Sampaikan kritik, saran, laporan aspirasi, atau aduan masalah fasilitas umum di lingkungan Anda.</p>
                        <button class="btn btn-outline-danger mt-auto"><a href="{{ route('layanan-1') }}" class="text-danger text-decoration-none">Ajukan Laporan</a></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-custom text-center p-4">
                        <div class="icon-box mb-3 mx-auto bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-file-earmark-check-fill fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Perizinan Online</h5>
                        <p class="text-muted small mb-4">Ajukan permohonan surat izin usaha, surat keterangan domisili, atau dokumen administrasi lainnya.</p>
                        <button class="btn btn-outline-success mt-auto"><a href="{{ route('layanan-2') }}" class="text-success text-decoration-none">Mulai Pengajuan</a></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 card-custom text-center p-4">
                        <div class="icon-box mb-3 mx-auto bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                            <i class="bi bi-info-circle-fill fs-3"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Informasi Publik</h5>
                        <p class="text-muted small mb-4">Akses transparansi anggaran, laporan kinerja, regulasi hukum terbaru, serta publikasi statistik instansi.</p>
                        <button class="btn btn-outline-info mt-auto"><a href="{{ route('layanan-3') }}" class="text-info text-decoration-none">Buka Dokumen</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri & Pengumuman -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h3 class="section-title">Dokumentasi Kegiatan</h3>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="position-relative overflow-hidden rounded-3 shadow-sm mb-3">
                                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=600" class="img-fluid w-full h-auto" alt="Rapat Instansi">
                                <div class="p-3 bg-dark text-white">
                                    <h6 class="mb-1">Rapat Sinergitas Antar Lembaga</h6>
                                    <small class="text-muted">12 Mei 2026</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative overflow-hidden rounded-3 shadow-sm mb-3">
                                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=600" class="img-fluid w-full h-auto" alt="Sosialisasi">
                                <div class="p-3 bg-dark text-white">
                                    <h6 class="mb-1">Sosialisasi Regulasi Terbaru ke UMKM</h6>
                                    <small class="text-muted">18 April 2026</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="section-title">Aplikasi Terintegrasi</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">E-Office Instansi</div>
                                Sistem surat-menyurat dinas internal.
                            </div>
                            <span class="badge bg-primary rounded-pill">Internal</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Satu Data Portal</div>
                                Kumpulan dataset instansi sektoral.
                            </div>
                            <span class="badge bg-success rounded-pill">Publik</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start py-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">E-Planning</div>
                                Perencanaan pembangunan terpadu.
                            </div>
                            <span class="badge bg-dark rounded-pill">Umum</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('depan.main-module.footer')

    @include('depan.main-module.js')

</body>
</html>