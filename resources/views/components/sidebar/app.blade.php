<aside class="col-lg-2 mx-0 bg-white min-vh-100">
    <nav class="sidebar card border-0 py-2 mb-4">
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item rounded {{ $currentPath === 'dashboard' ? 'bg-gray' : '' }}">
                <a class="nav-link item {{ $currentPath === 'dashboard' ? 'text-body' : 'text-secondary' }} d-flex justify-content-between align-items-center"
                    href="/dashboard">
                    <div>
                        <i class="fas fa-home text-center" style="width: 30px"></i>
                        <span>
                            Dashboard
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item has-submenu {{ $currentPath === 'surat' ? 'bg-gray' : '' }}">
                <a class="nav-link item  {{ $currentPath === 'surat' ? 'text-body' : 'text-secondary' }} d-flex justify-content-between align-items-center"
                    href="#">
                    <div>
                        <i class="fas fa-file-alt text-center" style="width: 30px"></i>
                        <span class="mr-1">
                            Data Master
                        </span>
                    </div>
                    <i class="fas fa-chevron-down fa-sm mt-1"></i>
                </a>
                <ul class="submenu collapse" style="list-style: none;">
                    <li><a class="nav-link text-secondary" href="/surat-masuk">Surat Masuk </a></li>
                    <li><a class="nav-link text-secondary" href="/surat-keluar">Surat Keluar </a></li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link item text-secondary d-flex justify-content-between align-items-center"
                    href="#">
                    <div>
                        <i class="fas fa-download text-center" style="width: 30px"></i>
                        <span class="mr-1">
                            Laporan
                        </span>
                    </div>
                    <i class="fas fa-chevron-down fa-sm mt-1"></i>
                </a>
                <ul class="submenu collapse" style="list-style: none;">
                    <li><a class="nav-link text-secondary" href="/surat-masuk/laporan">Surat Masuk </a></li>
                    <li><a class="nav-link text-secondary" href="/surat-keluar/laporan">Surat Keluar </a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
