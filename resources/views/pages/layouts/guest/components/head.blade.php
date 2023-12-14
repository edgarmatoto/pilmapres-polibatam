<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>@yield('title')</title>
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/style.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendor/bootstrap-v5.3.2/css/bootstrap.min.css') }}"
    >
    @stack('styles')
</head>
