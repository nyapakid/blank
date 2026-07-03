<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Struktur Organisasi</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')
    
    <!-- ============================================== -->
    <!-- PAGE 4: STRUKTUR ORGANISASI -->
    <!-- ============================================== -->
    <!-- Struktur Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Struktur Organisasi</h1>
            <p class="lead mb-4">Bagan hierarki pembagian wewenang dan tanggung jawab di dalam instansi.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container text-center">
            <!-- Org Chart Visualizer -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="org-box border-primary shadow">
                        <span class="badge bg-primary mb-1 text-white">Kepala Instansi</span>
                        <h5 class="fw-bold mb-1 text-dark">Dr. H. Budi Santoso, M.Si.</h5>
                        <small class="text-muted">Eselon II/a - Pembina Utama</small>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="org-box border-secondary bg-light">
                        <span class="badge bg-secondary mb-1">Sekretariat Utama</span>
                        <h5 class="fw-bold mb-1">Ir. Sri Mulyani, M.T.</h5>
                        <small class="text-muted">Koordinasi Administrasi & Kepegawaian</small>
                    </div>
                </div>
            </div>

            <!-- Tiga Sub Divisi / Bidang -->
            <div class="row g-3 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="org-box" style="border-color: #0d6efd;">
                        <span class="badge bg-primary mb-1">Bidang Kehumasan</span>
                        <h6 class="fw-bold mb-1">Rahmat Hidayat, S.Sos.</h6>
                        <p class="small text-muted mb-0">Diseminasi Informasi & Hubungan Media</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="org-box" style="border-color: #198754;">
                        <span class="badge bg-success mb-1">Bidang Pelayanan Publik</span>
                        <h6 class="fw-bold mb-1">Ahmad Subagyo, S.E.</h6>
                        <p class="small text-muted mb-0">Teknis Pengawasan Layanan Perizinan</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="org-box" style="border-color: #dc3545;">
                        <span class="badge bg-danger mb-1">Bidang Pengaduan</span>
                        <h6 class="fw-bold mb-1">Dewi Lestari, S.H.</h6>
                        <p class="small text-muted mb-0">Penanganan Pengaduan & Laporan Warga</p>
                    </div>
                </div>
            </div>

            <!-- Keterangan Tambahan -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="p-3 bg-light rounded-3 text-start border">
                        <h6 class="fw-bold text-dark"><i class="bi bi-info-circle me-2"></i>Catatan Tata Kerja</h6>
                        <p class="small mb-0 text-muted">Bagan organisasi ini didasarkan pada Peraturan Daerah terbaru tentang Susunan Organisasi dan Tata Kerja (SOTK) Instansi Pemerintahan Daerah. Hubungan garis struktural menunjukkan garis komando dan pertanggungjawaban vertikal, sedangkan hubungan fungsional diatur dalam regulasi turunannya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('depan.main-module.footer')

    @include('depan.main-module.js')

</body>
</html>