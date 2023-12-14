<!DOCTYPE html>
<html lang="en">
@include('pages.layouts.guest.components.head')

<body>
    @include('pages.layouts.guest.components.navbar')
    @yield('content')
    @include('pages.layouts.guest.components.scripts')
</body>

</html>
