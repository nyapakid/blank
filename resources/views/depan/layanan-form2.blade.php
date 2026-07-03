<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Layanan 2</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')
    
    <!-- ============================================== -->
    <!-- PAGE 7: LAYANAN - 2 -->
    <!-- ============================================== -->

    <!-- Perizinan Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Layanan 2</h1>
            <p class="lead mb-4">Jelaskan isi layanan anda disini</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card card-custom border h-100 p-3">
                        <h5 class="fw-bold text-success border-bottom pb-2">Langkah 1: Lengkapi Berkas</h5>
                        <p class="small text-muted">Siapkan pindaian (scan) KTP, Kartu Keluarga, Pas Foto terbaru, dan surat keterangan pengantar dari RT/RW setempat dalam format PDF atau JPG.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom border h-100 p-3">
                        <h5 class="fw-bold text-success border-bottom pb-2">Langkah 2: Isi Formulir</h5>
                        <p class="small text-muted">Pilih tipe izin di bawah ini, isi data diri dan data penunjang secara lengkap serta upload seluruh dokumen kelengkapan yang diminta.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom border h-100 p-3">
                        <h5 class="fw-bold text-success border-bottom pb-2">Langkah 3: Proses Verifikasi</h5>
                        <p class="small text-muted">Petugas kami akan melakukan validasi dokumen. Anda dapat memantau progres validasi berkas melalui email.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="card card-custom p-4 border shadow-sm">
                        <h4 class="fw-bold mb-4 text-center">Formulir Pengajuan Izin Baru</h4>
                        <form id="permitForm" onsubmit="handlePermitSubmit(event)">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="permName" class="form-label">Nama Pemohon</label>
                                    <input type="text" class="form-control" id="permName" required placeholder="Nama lengkap pemohon">
                                </div>
                                <div class="col-md-6">
                                    <label for="permNik" class="form-label">NIK Pemohon</label>
                                    <input type="text" class="form-control" id="permNik" required placeholder="Nomor KTP">
                                </div>
                                <div class="col-12">
                                    <label for="permType" class="form-label">Tipe Izin Yang Diajukan</label>
                                    <select class="form-select" id="permType" required>
                                        <option value="">Pilih Dokumen Izin...</option>
                                        <option value="IUMK">Izin Usaha Mikro Kecil (IUMK)</option>
                                        <option value="SKD">Surat Keterangan Domisili Tempat Tinggal</option>
                                        <option value="SKTM">Surat Keterangan Tidak Mampu (SKTM)</option>
                                        <option value="Izin Keramaian">Izin Keramaian / Acara Kemasyarakatan</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="permFile" class="form-label">Unggah Dokumen Pendukung (Gabungan PDF/ZIP - Max 10MB)</label>
                                    <input class="form-control" type="file" id="permFile" required>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-success btn-lg px-5">Ajukan Permohonan</button>
                                </div>
                            </div>
                        </form>

                        <!-- Permit alert placeholder -->
                        <div id="permitAlert" class="alert alert-success mt-4 d-none" role="alert">
                            <h5 class="alert-heading fw-bold"><i class="bi bi-file-earmark-check-fill me-2"></i>Pengajuan Berhasil Diunggah!</h5>
                            <p class="mb-0">Dokumen dan data Anda telah diterima oleh sistem administrasi. Nomor registrasi pengajuan Anda: <strong id="permitTicket">#REG-XXXXXXXX</strong>. Kami akan segera memverifikasi kelengkapan dokumen Anda.</p>
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