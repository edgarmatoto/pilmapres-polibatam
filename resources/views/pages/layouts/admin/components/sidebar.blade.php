<div
    id="sidebar"
    class="active"
>
    <div class="sidebar-wrapper active">
        <div class="text-center">
            <a href="{{ route('admin.home') }}">
                <img
                    style="width: 100px;"
                    class="navbar-brand img-fluid logo"
                    src="{{ asset('assets/images/logo.jpeg') }}"
                    alt="logo_poltek"
                >
            </a>
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
                    <a
                        href="{{ route('admin.ulasan') }}"
                        class='sidebar-link'
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="4"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <span>Ulasan</span>
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
