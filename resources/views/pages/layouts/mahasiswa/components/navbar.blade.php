<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a href="{{ route('welcome') }}">
            <img
                style="width: 70px;"
                class="navbar-brand img-fluid logo"
                src="{{ asset('assets/images/logo.jpeg') }}"
                alt="logo_poltek"
            >
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse px-xl-5"
            id="navbarNavAltMarkup"
        >
            <div class="navbar-nav gap-xl-3 me-auto">
                <a
                    class="nav-link"
                    href="{{ route('mhs.home') }}"
                >Home</a>
                <a
                    class="nav-link"
                    href="{{ route('mhs.pelayanan.index') }}"
                >Pelayanan</a>
                <a
                    class="nav-link"
                    href="{{ route('bantuan') }}"
                >Bantuan</a>
                <a
                    class="nav-link d-lg-none"
                    href="{{ route('mhs.profile.index') }}"
                >Profile</a>
                <div class="nav-link d-lg-none">
                    <form
                        action="{{ route('mhs.logout') }}"
                        method="post"
                    >
                        @csrf
                        <button
                            type="submit"
                            class="dropdown-item py-2"
                        >Logout</button>
                    </form>
                </div>
            </div>
            <div class="btn-group d-none d-lg-block">
                <button
                    class="border-0 bg-transparent"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        src="{{ asset('assets/icons/user.svg') }}"
                        alt="user icon"
                    >
                </button>
                <ul class="dropdown-menu dropdown-menu-end mt-4">
                    <li>
                        <a
                            class="dropdown-item py-2"
                            href="{{ route('mhs.profile.index') }}"
                        >Profile</a>
                    </li>
                    <li>
                        <form
                            action="{{ route('mhs.logout') }}"
                            method="post"
                        >
                            @csrf
                            <button
                                type="submit"
                                class="dropdown-item py-2"
                            >Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
