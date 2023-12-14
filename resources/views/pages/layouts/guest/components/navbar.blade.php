<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a href="{{ route('welcome') }}">
            <img
                style="width: 150px;"
                class="navbar-brand img-fluid"
                src="{{ asset('assets/images/logo_poltek.png') }}"
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
            class="collapse navbar-collapse justify-content-end pt-3 pt-md-0"
            id="navbarNavAltMarkup"
        >
            <div class="navbar-nav justify-content-end pe-md-5">
                <a
                    class="nav-link active text-blue-sky fw-semibold"
                    aria-current="page"
                    href="#"
                >Bantuan</a>
            </div>
        </div>
    </div>
</nav>
