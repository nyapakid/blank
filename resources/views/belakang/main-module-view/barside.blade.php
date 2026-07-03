        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('belakang') }}">
                <div class="sidebar-brand-text mx-3">nama instansi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('belakang') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sample menu
            </div>

            <!-- Nav Item - Pages Collapse Menu with separated -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accordionSidebar1" aria-expanded="true" aria-controls="accordionSidebar1">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>judul</span>
                </a>
                <div id="accordionSidebar1" class="collapse" aria-labelledby="headingaplikasiA" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">menu 1:</h6>
                            <a class="collapse-item" href="#">sub menu 1</a>
                            <a class="collapse-item" href="#">sub menu 2</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">menu 2</h6>
                            <a class="collapse-item" href="#">sub menu 1</a>
                            <a class="collapse-item" href="#">sub menu 2</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#accordionSidebar2" aria-expanded="true" aria-controls="accordionSidebar2">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>judul</span>
                </a>
                <div id="accordionSidebar2" class="collapse" aria-labelledby="headingakreditasiinternasional" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">sub menu 1</a>
                        <a class="collapse-item" href="#">sub menu 2</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('belakang-contoh') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>contoh CRUD</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('belakang-form') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>contoh FORM</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('belakang-kosong') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>contoh KOSONG</span></a>
            </li>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('belakang-dibangun') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>contoh DIBANGUN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->