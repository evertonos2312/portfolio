<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="preload" />

        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>

        <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/png" href="{{Vite::asset('resources/assets/img/favicon.png')}}" />
    </head>
    <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
        <div id="main" class="relative">
            <div x-data="{
                triggerNavItem(id) {
                    $scroll(id)
                },
                triggerMobileNavItem(id) {
                    mobileMenu = false;
                    this.triggerNavItem(id)
                }
            }">
                <livewire:navbar />
                    <livewire:hello />

                    <livewire:about />

                    <livewire:services />

                    <livewire:portfolio />

                    <livewire:work />

                    <livewire:blog />

                    <livewire:contact />

                    <livewire:join />
                <div class="bg-primary">
                    <div class="container flex flex-col justify-between py-6 sm:flex-row">
                        <p class="text-center font-body text-white md:text-left">
                            © Copyright 2022. All right reserved, Everton Silva.
                        </p>
                        <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
                            <a href="/" class="pl-4">
                                <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                            </a>
                            <a href="/" class="pl-4">
                                <i class="bx bxl-github text-2xl text-white hover:text-yellow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
