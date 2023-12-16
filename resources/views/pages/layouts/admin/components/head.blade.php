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
        href="{{ asset('assets/css/app.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendor/iconly/bold.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/bootstrap.css') }}"
    >
    @stack('styles')
</head>
