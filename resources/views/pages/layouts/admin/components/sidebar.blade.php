<div
    id="sidebar"
    class="active"
>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('admin.home') }}">Mahasiswa Berprestasi Politeknik Negeri Batam</a>
                </div>
                <div class="toggler">
                    <a
                        href="#"
                        class="sidebar-hide d-xl-none d-block"
                    ><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item">
                    <a
                        href="{{ route('admin.home') }}"
                        class='sidebar-link'
                    >
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <div class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Data</span>
                    </div>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('admin.alternatif.index') }}">Alternatif</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{ route('admin.bobot-kriteria.index') }}">Bobot &amp; Kriteria</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a
                        href="{{ route('admin.matrik.index') }}"
                        class='sidebar-link'
                    >
                        <i class="bi bi-pentagon-fill"></i>
                        <span>Matrik</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        href="{{ route('admin.preferensi.index') }}"
                        class='sidebar-link'
                    >
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Nilai Preferensi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form
                        action="{{ route('admin.logout') }}"
                        method="POST"
                    >
                        @csrf
                        <button
                            type="submit"
                            class=' bg-transparent w-100 border-0 p-0'
                        >
                            <div class="sidebar-link">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="fw-bold">Logout</span>
                            </div>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
