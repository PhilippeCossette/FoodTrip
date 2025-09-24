<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="description"
        content="Site De Blog de Voyage" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
    <style>
        @font-face {
            font-family: "Fact";
            src: url('public/css/fonts/fact-extra-bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>

<body>
    <header class="navigation">
        <nav class="navigation-wrapper mx-1200 navbar navbar-expand-lg">
            <!-- Logo -->
            <a href="" class="navigation__link navigation__logo">The FoodTrip</a>

            <!-- Mobile toggle button (unchanged design) -->
            <i class="ri-menu-line navigation__link navigation__menu-btn"
                role="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu"
                aria-controls="mobileMenu"
                aria-label="Toggle menu"></i>

            <!-- Desktop menu -->
            <div class="navigation__link-container navigation__dropdown d-none d-lg-flex">
                <a href="#" class="navigation__link">Our Trip</a>
                <a href="#" class="navigation__link">Foods</a>
                <a href="#" class="navigation__link">About us</a>
                <a href="#" class="navigation__link">Contact</a>
                <a href="#" class="navigation__link"><i class="ri-user-fill"></i></a>
            </div>
        </nav>
    </header>

    <!-- Offcanvas mobile menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 d-flex flex-column navigation__dropdown">
            <a href="#" class="navigation__mobile-links">Our Trip</a>
            <a href="#" class="navigation__mobile-links">Foods</a>
            <a href="#" class="navigation__mobile-links">About us</a>
            <a href="#" class="navigation__mobile-links">Contact</a>
            <a href="#" class="navigation__mobile-links"><i class="ri-user-fill"></i></a>
        </div>
    </div>
    <main>
        @yield('content')

    </main>
    <footer>

    </footer>
</body>

</html>