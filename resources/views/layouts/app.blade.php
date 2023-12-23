<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') · {{ config('app.name', 'ORZ Stack') }}</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/laravel-indigo-2.webp') }}" type="image/x-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- Fontawesome CDN Link --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

        {{-- Styles --}}
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased text-[#697a8d] bg-[#F5F5F9]">
        <x-partials.sidebar />

        <x-partials.navbar />
        
        <section class="main">
            <div class="px-6">
                <main>
                    @yield('content')
                </main>

                <x-partials.footer />
            </div>
        </section>

        {{-- Scripts --}}
        @vite('resources/js/app.js')

        <script>
            const sidebar = document.querySelector(".sidebar");
            const sidebarClose = document.querySelector("#sidebar-close");
            const menu = document.querySelector(".menu-content");
            const menuItems = document.querySelectorAll(".submenu-item");
            const subMenuTitles = document.querySelectorAll(".submenu .menu-title");
            sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));
            menuItems.forEach((item, index) => {
                item.addEventListener("click", () => {
                    menu.classList.add("submenu-active");
                    item.classList.add("show-submenu");
                    menuItems.forEach((item2, index2) => {
                        if (index != index2) {
                            item2.classList.remove("show-submenu");
                        }
                    });
                });
            });
            subMenuTitles.forEach((title) => {
                title.addEventListener("click", () => {
                    menu.classList.remove("submenu-active");
                });
            });
        </script>
    </body>
</html>
