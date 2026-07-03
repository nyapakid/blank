<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Sejarah Instansi</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')

    <!-- ============================================== -->
    <!-- PAGE 3: SEJARAH INSTANSI -->
    <!-- ============================================== -->
    <!-- Sejarah Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Sejarah Instansi</h1>
            <p class="lead mb-4">Melacak tapak langkah perjuangan kami sejak awal pembentukan hingga hari ini.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4 class="fw-bold text-primary">Tahun 1995: Pembentukan Pertama</h4>
                            <p class="text-muted mb-2">Era Orde Baru - Pembentukan Unit Koordinasi Administrasi Sektoral</p>
                            <p>Instansi dibentuk pertama kali melalui keputusan presiden untuk mengoordinasi kegiatan layanan masyarakat perkotaan yang sedang tumbuh pesat. Memulai operasional dengan kantor berkapasitas 20 personil.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bold text-primary">Tahun 2005: Transformasi Otonomi Daerah</h4>
                            <p class="text-muted mb-2">Era Reformasi & Desentralisasi</p>
                            <p>Sesuai dengan implementasi undang-undang otonomi daerah, instansi ini melebur menjadi dinas daerah tingkat provinsi, memberi ruang kemudahan kontrol langsung oleh kepala daerah dan percepatan respon permohonan masyarakat.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bold text-primary">Tahun 2015: Inisiasi Digitalisasi Dokumen</h4>
                            <p class="text-muted mb-2">Era Modernisasi Teknologi</p>
                            <p>Pengenalan teknologi digital pertama untuk arsip pelayanan publik. Mengurangi masa tunggu pencarian berkas dari 5 hari kerja menjadi 1 hari kerja, serta peluncuran website dinas versi pertama.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="fw-bold text-primary">Tahun 2026: Era Pelayanan Terintegrasi Satu Pintu</h4>
                            <p class="text-muted mb-2">Masa Kini</p>
                            <p>Menyempurnakan seluruh infrastruktur digital, meluncurkan portal terintegrasi saat ini, dan menyediakan platform mandiri yang memproses berkas masyarakat dalam kurun waktu menit melalui sistem otomasi.</p>
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