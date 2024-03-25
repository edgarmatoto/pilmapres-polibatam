<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.mahasiswa.components.head')

<body>
    @include('pages.layouts.mahasiswa.components.navbar')
    @include('pages.layouts.mahasiswa.components.bottomNavbar')
    @yield('content')
    @include('pages.layouts.mahasiswa.components.scripts')
    @include('pages.layouts.mahasiswa.components.alerts')

    @if (alternatifDoesntHaveUlasan())
    @include('pages.layouts.mahasiswa.components.feedback')
    @endif

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>

</html>
