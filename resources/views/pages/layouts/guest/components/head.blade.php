<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-v5.3.2/css/bootstrap.min.css') }}">
    <link href="{{ asset('vendor/sweetalert2-v11.10.1/sweetalert2.min.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

