<!-- MAIN NAVBAR (ALWAYS STICKY ON TOP) -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <div class="container">

        <!-- bagian icon navbar start -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('depan/img/icon.png') }}" alt="icon pada navbar" class="icon-img me-2">
            <div>
                <span class="d-block fs-6 lh-1">DEPARTEMEN APALAH</span>
                <span class="d-block fs-7 text-muted-lite small" style="font-size: 0.75rem; color: #a0aec0;">INSTANSI APALAH WEB INI</span>
            </div>
        </a>
        <!-- bagian icon navbar start -->

        <!-- bootstrap navbar start -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- bootstrap navbar end -->

        <!-- konten navbar start -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sejarah') }}">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('struktur') }}">Struktur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pimpinan-staff') }}">Pimpinan & Staf</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark border-0 shadow" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item py-2" href="{{ route('layanan-1') }}">Layanan Form 1</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('layanan-2') }}">Layanan Form 2</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('layanan-3') }}">Layanan Form 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- konten navbar start -->
        
    </div>
</nav>