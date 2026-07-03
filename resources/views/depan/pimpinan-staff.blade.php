<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Pimpinan & Staf</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')
    
    <!-- ============================================== -->
    <!-- PAGE 5: PIMPINAN DAN STAF -->
    <!-- ============================================== -->
    <!-- Pimpinan Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Pimpinan & Staf Instansi</h1>
            <p class="lead mb-4">Siap melayani masyarakat dengan integritas tinggi dan dedikasi prima.</p>
        </div>
    </section>

    <!-- Pimpinan Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="section-title text-center">Profil Jajaran Pimpinan</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-5 col-lg-4">
                    <div class="card card-custom h-100 border text-center overflow-hidden">
                        <div class="bg-primary py-4 text-white">
                            <i class="bi bi-person-circle fs-1"></i>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-dark mb-1">Dr. H. Budi Santoso, M.Si.</h5>
                            <p class="text-primary small mb-3">Kepala Instansi</p>
                            <p class="small text-muted">"Melayani dengan ketulusan dan adaptif terhadap perkembangan teknologi digital demi Indonesia maju."</p>
                            <div class="border-top pt-3 mt-3">
                                <span class="small text-muted d-block">NIP. 19741203 199903 1 002</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="card card-custom h-100 border text-center overflow-hidden">
                        <div class="bg-secondary py-4 text-white">
                            <i class="bi bi-person-circle fs-1"></i>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold text-dark mb-1">Ir. Sri Mulyani, M.T.</h5>
                            <p class="text-secondary small mb-3">Sekretaris Utama</p>
                            <p class="small text-muted">"Manajemen administrasi yang transparan, bersih, dan sistematis adalah fondasi utama keberhasilan instansi."</p>
                            <div class="border-top pt-3 mt-3">
                                <span class="small text-muted d-block">NIP. 19780515 200212 2 004</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Staf / Bidang Utama -->
            <div class="text-center mt-5 mb-4 pt-4">
                <h3 class="section-title text-center">Jajaran Pejabat & Staff Fungsional</h3>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Rahmat Hidayat, S.Sos.</h6>
                        <span class="text-muted small">Kepala Bidang Kehumasan</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Ahmad Subagyo, S.E.</h6>
                        <span class="text-muted small">Kepala Bidang Pelayanan Publik</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Dewi Lestari, S.H.</h6>
                        <span class="text-muted small">Kepala Bidang Pengaduan</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Siti Aminah, A.Md.</h6>
                        <span class="text-muted small">Analis Kepegawaian</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Irwan Prasetyo, S.Kom.</h6>
                        <span class="text-muted small">Pranata Komputer / IT</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom p-3 border text-center">
                        <div class="mx-auto mb-2 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-person text-secondary fs-3"></i>
                        </div>
                        <h6 class="fw-bold mb-1">Agus Wijaya, S.E.</h6>
                        <span class="text-muted small">Bendahara Pengeluaran</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('depan.main-module.footer')

    @include('depan.main-module.js')

</body>
</html>