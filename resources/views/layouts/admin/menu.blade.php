<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('super.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.user.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.user.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data User</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Pilar
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.pilar.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Pilar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.pilar.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Pilar</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Tujuan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.tujuan.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Tujuan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.tujuan.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Tujuan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Indikator
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.indikator.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Indikator</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.indikator.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Indikator</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Pencapaian
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.pencapaian.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Pencapaian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.pencapaian.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Pencapaian</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fa-solid fa-file"></i>
                    <p>
                        Dokumen
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.dokumen.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Dokumen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.dokumen.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Dokumen</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>
                        Berita
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('super.berita.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Berita</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('super.berita.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Berita</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 2)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Tujuan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.tujuan') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Tujuan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Indikator
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.indikator.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Indikator</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.indikator.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Indikator</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Pencapaian
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.pencapaian.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Pencapaian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.pencapaian.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Pencapaian</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                @csrf
            </form>
            <a href="#" class="nav-link text-white"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out"></i>
                <p>
                    Logout
                </p>
            </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 3)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('opd.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Indikator
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('opd.indikator.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Indikator</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('opd.indikator.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Indikator</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Pencapaian
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('opd.pencapaian.index') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Pencapaian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('opd.pencapaian.create') }}" class="nav-link text-white">
                            <i class="far fa-circle nav-icon"></i>
                            <p><small>Tambah Data Pencapaian</small></p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endif

<!-- /.sidebar-menu -->
