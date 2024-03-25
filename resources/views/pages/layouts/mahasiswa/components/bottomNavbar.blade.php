<nav class="bottom-navbar border-top border-2 border-info pt-1">
    <div class="container">
        <div class="row text-center">
            <div class="col col-md-3">
                <a class="nav-item {{ Route::currentRouteName() == 'mhs.home' ? 'nav-item-active' : '' }}" href="{{ route('welcome') }}">
                    <img class="img-fluid" width="40" src="{{ asset('assets/icons/home-svgrepo-com.svg') }}" alt="Home">
                    <p class="nav-text ">Home</p>
                </a>
            </div>
            <div class="col col-md-3 bg">
                <a class="nav-item {{ Route::currentRouteName() == 'mhs.pelayanan.index' ? 'nav-item-active' : '' }}" href="{{ route('mhs.pelayanan.index') }}">
                    <img class="img-fluid" width="40" src="{{ asset('assets/icons/upload-document-note-svgrepo-com.svg') }}" alt="Home">
                    <p class="nav-text">Pelayanan</p>
                </a>
            </div>
            <div class="col col-md-3">
                <a class="nav-item" href="{{ route('bantuan') }}">
                    <img class="img-fluid" width="40" src="{{ asset('assets/icons/about-svgrepo-com.svg') }}" alt="Home">
                    <p class="nav-text">Bantuan</p>
                </a>
            </div>
            <div class="col col-md-3">
                <a class="nav-item {{ Route::currentRouteName() == 'mhs.profile.index' ? 'nav-item-active' : '' }}" href="{{ route('mhs.profile.index') }}">
                    <img class="img-fluid" width="40" src="{{ asset('assets/icons/profile-round-1346-svgrepo-com.svg') }}" alt="Home">
                    <p class="nav-text">Profile</p>
                </a>
            </div>
        </div>
    </div>

</nav>
