<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.admin.components.head')

<body>
    <div id="app">
        @include('pages.layouts.admin.components.sidebar')
        @yield('content')
    </div>
    @include('pages.layouts.admin.components.scripts')
    @include('pages.layouts.admin.components.alerts')

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
