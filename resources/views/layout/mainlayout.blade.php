<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @include('layout.partials.head')

    @yield('css')
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://kit.fontawesome.com/652b8e06e9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    @yield('scripts')
</head>
@if (!Route::is(['error-404', 'error-500']))

    <body>
@endif
@if (Route::is(['error-404', 'error-500']))

    <body class="error-pages">
@endif
@if (!Route::is(['change-password2', 'confirm-mail','error-404','error-500','forgot-password','login','lock-screen','register']))
    <div class="main-wrapper">
@endif
@if (Route::is(['change-password2', 'confirm-mail','forgot-password','login','lock-screen','register']))
    <div class="main-wrapper login-body">
@endif
@if(Route::is(['error-404','error-500']))
<div class="main-wrapper error-wrapper">
    @endif
    @if (!Route::is(['change-password2', 'confirm-mail','forgot-password','login','lock-screen','register','error-404','error-500']))
        @include('layout.partials.header')
        @include('layout.partials.sidebar')
    @endif
    @yield('content')
</div>
@component('components.modal-popup')
@endcomponent
<div class="sidebar-overlay" data-reff=""></div>
@include('layout.partials.footer-scripts')
</body>

</html>
