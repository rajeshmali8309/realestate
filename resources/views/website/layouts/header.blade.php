<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'SocialTechnologiya')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('website/assets/img/social_logo_icon.png') }}" rel="icon">
    <link href="{{ asset('website/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('website/assets/css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @yield('head')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">KnightOne</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li onclick="location.href='{{ route('index') }}'"><a href="#hero" id="HomePage">Home</a></li>
                    <li id="Aboutpage"><a href="#about">About</a></li>
                    <li id="Servicespage"><a href="#services">Services</a></li>
                    <li id="faqpage"><a href="#faq">FAQ</a></li>
                    <li id="Letestpage"><a href="#recent-posts">Letest Blogs</a></li>
                    <li ><a href="{{route('blogs')}}" id="BlogPage">Blogs</a></li>
                    <li onclick="location.href='{{ route('contact') }}'"><a href="#contact" id="ContactPage">Contact</a></li>
                    <!-- <li><a href="{{route('contact')}}" id="ContactPage">Contact</a></li> -->
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn" href="#">Sign Up</a>

        </div>
    </header>