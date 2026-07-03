<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Profil Instansi</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')
    
    <!-- ============================================== -->
    <!-- PAGE 2: PROFIL INSTANSI -->
    <!-- ============================================== -->
    <!-- Profile Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Profil Instansi</h1>
            <p class="lead mb-4">Mengenal lebih dekat visi, misi, dan dasar hukum kami dalam melayani negara.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="section-title">Tugas Pokok & Fungsi</h3>
                    <p class="lead">Kami berkomitmen menjadi tulang punggung pelayanan publik di bidang administratif pemerintahan.</p>
                    <p>Berdasarkan Peraturan Pemerintah Republik Indonesia, instansi ini mengemban mandat menyelenggarakan perumusan kebijakan teknis operasional, koordinasi pelaksanaan tugas bimbingan teknis, serta evaluasi di bidang pembangunan prasarana kemasyarakatan.</p>
                    <p>Secara berkala, kami berkolaborasi dengan segenap pemangku kepentingan untuk memastikan keselarasan program pembangunan nasional.</p>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-shield-fill-check me-2"></i>Nilai-Nilai Dasar ASN (BerAKHLAK)</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><strong class="text-dark">Berorientasi Pelayanan</strong> — Memahami dan memenuhi kebutuhan masyarakat.</li>
                            <li class="mb-2"><strong class="text-dark">Akuntabel</strong> — Bertanggung jawab atas kepercayaan yang diberikan.</li>
                            <li class="mb-2"><strong class="text-dark">Kompeten</strong> — Terus belajar dan mengembangkan kapabilitas.</li>
                            <li class="mb-2"><strong class="text-dark">Harmonis</strong> — Saling peduli dan menghargai perbedaan.</li>
                            <li class="mb-2"><strong class="text-dark">Loyal</strong> — Berdedikasi dan mengutamakan kepentingan bangsa.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Visi & Misi Card Grid -->
            <div class="row g-4 mt-4">
                <div class="col-md-5">
                    <div class="card card-custom bg-primary text-white p-4 h-100">
                        <div class="card-body">
                            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                                <i class="bi bi-eye-fill fs-3"></i>
                            </div>
                            <h3 class="fw-bold mb-3">Visi Kami</h3>
                            <p class="lead" style="line-height: 1.6;">"Menjadi instansi pemerintahan yang terdepan dalam mewujudkan pelayanan prima yang berbasis digital, profesional, transparan, dan berkeadilan pada tahun 2030."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card card-custom bg-white p-4 h-100">
                        <div class="card-body">
                            <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 60px; height: 60px;">
                                <i class="bi bi-list-stars fs-3"></i>
                            </div>
                            <h3 class="fw-bold mb-3 text-dark">Misi Kami</h3>
                            <ul class="list-group list-group-flush border-0">
                                <li class="list-group-item px-0 py-3 bg-transparent border-bottom">
                                    <div class="d-flex">
                                        <span class="badge bg-primary me-3 text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; border-radius: 50%;">1</span>
                                        <div>Mendorong transformasi layanan publik secara digital dan terintegrasi penuh.</div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-3 bg-transparent border-bottom">
                                    <div class="d-flex">
                                        <span class="badge bg-primary me-3 text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; border-radius: 50%;">2</span>
                                        <div>Mengembangkan kapasitas sumber daya manusia aparatur sipil negara yang kompeten dan adaptif.</div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0 py-3 bg-transparent">
                                    <div class="d-flex">
                                        <span class="badge bg-primary me-3 text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; border-radius: 50%;">3</span>
                                        <div>Mewujudkan tata kelola organisasi pemerintahan yang akuntabel, bersih dari korupsi, kolusi, dan nepotisme.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('depan.main-module.footer')

    @include('depan.main-module.js')

</body>
</html>