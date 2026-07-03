<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Template - Layanan 3</title>
    
    @include('depan.main-module.css')
</head>

<body>

    @include('depan.main-module.top-info-bar')
    @include('depan.main-module.nav-bar')

    <!-- ============================================== -->
    <!-- PAGE 8: LAYANAN - 3 -->
    <!-- ============================================== -->
    <!-- Informasi Banner -->
    <section class="hero-section d-flex align-items-center py-5">
        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?q=80&w=1920" class="hero-bg" alt="Background">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Layanan 3</h1>
            <p class="lead mb-4">Jelaskan isi layanan anda disini</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="input-group mb-5 shadow-sm">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 py-3" placeholder="Ketik kata kunci dokumen (misal: Rencana Strategis, Anggaran 2026)...">
                        <button class="btn btn-primary px-4" type="button">Cari Dokumen</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle bg-white rounded shadow-sm overflow-hidden">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="width: 10%">No.</th>
                                    <th scope="col" style="width: 45%">Nama Dokumen / Regulasi</th>
                                    <th scope="col" style="width: 15%">Format</th>
                                    <th scope="col" style="width: 15%">Ukuran</th>
                                    <th scope="col" style="width: 15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td class="fw-semibold">Laporan Kinerja Pemerintah Instansi (LKjIP) Tahun Anggaran 2025</td>
                                    <td><span class="badge bg-danger">PDF</span></td>
                                    <td>4.8 MB</td>
                                    <td class="text-center"><a href="#" class="btn btn-sm btn-outline-primary" onclick="alert('Demo download dimulai untuk LKjIP 2025')"><i class="bi bi-download me-1"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td class="fw-semibold">Rencana Strategis (Renstra) Pelayanan Publik 2024-2029</td>
                                    <td><span class="badge bg-danger">PDF</span></td>
                                    <td>12.1 MB</td>
                                    <td class="text-center"><a href="#" class="btn btn-sm btn-outline-primary" onclick="alert('Demo download dimulai untuk Renstra 2024-2029')"><i class="bi bi-download me-1"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td class="fw-semibold">Daftar Informasi Publik (DIP) Ringkasan Laporan Keuangan Semester II</td>
                                    <td><span class="badge bg-success">XLSX</span></td>
                                    <td>1.2 MB</td>
                                    <td class="text-center"><a href="#" class="btn btn-sm btn-outline-primary" onclick="alert('Demo download dimulai untuk Laporan Keuangan Semester II')"><i class="bi bi-download me-1"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td class="fw-semibold">Pedoman Pelayanan Administrasi Satu Pintu Digital Terbaru</td>
                                    <td><span class="badge bg-danger">PDF</span></td>
                                    <td>2.5 MB</td>
                                    <td class="text-center"><a href="#" class="btn btn-sm btn-outline-primary" onclick="alert('Demo download dimulai untuk Pedoman Pelayanan')"><i class="bi bi-download me-1"></i> Unduh</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('depan.main-module.footer')

    @include('depan.main-module.js')

</body>
</html>