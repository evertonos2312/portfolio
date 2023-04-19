<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>


    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    @livewireStyles
</head>
<body>
<b class="screen-overlay"></b>
<livewire:admin.sidebar />
<main class="main-wrap">
    <livewire:admin.navbar />
    <section class="content-main">
            @yield('content')
    </section>
</main>
<script src="{{ asset('js/script.js') }}"></script>
@livewireScripts

</body>
</html>
