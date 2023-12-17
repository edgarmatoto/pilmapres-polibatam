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
</body>

</html>
