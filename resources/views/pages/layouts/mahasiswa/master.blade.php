<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.mahasiswa.components.head')

<body>
    @include('pages.layouts.mahasiswa.components.navbar')
    @yield('content')
    @include('pages.layouts.mahasiswa.components.scripts')
    @include('pages.layouts.mahasiswa.components.alerts')

    @if (ulasan())
        @include('pages.layouts.mahasiswa.components.feedback')
    @endif
</body>

</html>
