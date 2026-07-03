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
                    <h4 class="fw-bold mb-4 text-center">Formulir Pengaduan Masyarakat</h4>
                    <form id="complaintForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="compName" class="form-label">Nama Lengkap (Sesuai KTP)</label>
                                <input type="text" class="form-control" id="compName" required placeholder="Contoh: Joko Widodo">
                            </div>
                            <div class="col-md-6">
                                <label for="compNik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                <input type="text" class="form-control" id="compNik" required placeholder="16 digit NIK">
                            </div>
                            <div class="col-md-12">
                                <label for="compEmail" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="compEmail" required placeholder="nama@email.com">
                            </div>
                            <div class="col-md-12">
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
                                <label for="permFile" class="form-label">Unggah Dokumen Pendukung (Gabungan PDF/ZIP - Max 10MB)</label>
                                <input class="form-control" type="file" id="permFile" required>
                            </div>
                            <div class="col-12">
                                <label for="compDetail" class="form-label">Detail Laporan Pengaduan</label>
                                <textarea class="form-control" id="compDetail" rows="5" required placeholder="Tuliskan kronologi kejadian secara rinci, cantumkan tanggal dan lokasi peristiwa..."></textarea>
                            </div>
                            <div class="col-6 text-center mt-4">
                                <button type="submit" class="btn btn-danger btn-lg px-5">Kirim Laporan</button>
                            </div>
                            <div class="col-6 text-center mt-4">
                                <button type="submit" class="btn btn-success btn-lg px-5">Ajukan Permohonan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>