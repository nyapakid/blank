<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Layanan 1</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')

    <!-- ============================================== -->
    <!-- PAGE 6: LAYANAN - 1 -->
    <!-- ============================================== -->
    <!-- Layanan 1 Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Layanan 1</h1>
            <p class="lead mb-4">Jelaskan isi layanan anda disini</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom p-4 border shadow-sm">
                        <h4 class="fw-bold mb-4 text-center">Formulir Pengaduan Masyarakat</h4>
                        <form id="complaintForm" onsubmit="handleComplaintSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="compName" class="form-label">Nama Lengkap (Sesuai KTP)</label>
                                    <input type="text" class="form-control" id="compName" required placeholder="Contoh: Joko Widodo">
                                </div>
                                <div class="col-md-6">
                                    <label for="compNik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                    <input type="text" class="form-control" id="compNik" required placeholder="16 digit NIK">
                                </div>
                                <div class="col-md-6">
                                    <label for="compEmail" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="compEmail" required placeholder="nama@email.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="compPhone" class="form-label">No. Telepon / WhatsApp</label>
                                    <input type="tel" class="form-control" id="compPhone" required placeholder="08xxxxxxxxxx">
                                </div>
                                <div class="col-12">
                                    <label for="compCategory" class="form-label">Kategori Pengaduan</label>
                                    <select class="form-select" id="compCategory" required>
                                        <option value="">Pilih Kategori...</option>
                                        <option value="Infrastruktur">Kerusakan Jalan / Fasilitas Publik</option>
                                        <option value="Pelayanan">Sikap Buruk Petugas Layanan</option>
                                        <option value="Pungli">Pungutan Liar / Suap</option>
                                        <option value="Lainnya">Lain-lain</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="compDetail" class="form-label">Detail Laporan Pengaduan</label>
                                    <textarea class="form-control" id="compDetail" rows="5" required placeholder="Tuliskan kronologi kejadian secara rinci, cantumkan tanggal dan lokasi peristiwa..."></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-danger btn-lg px-5">Kirim Laporan</button>
                                </div>
                            </div>
                        </form>
                        
                        <!-- Success Alert placeholder -->
                        <div id="complaintAlert" class="alert alert-success mt-4 d-none" role="alert">
                            <h5 class="alert-heading fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Laporan Berhasil Terkirim!</h5>
                            <p class="mb-0">Terima kasih atas kepedulian Anda. Laporan Anda telah kami catat dengan nomor tiket: <strong id="complaintTicket">#TKT-XXXXXXXX</strong>. Kami akan segera menghubungi Anda dalam kurun waktu 24 jam melalui email atau WhatsApp.</p>
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