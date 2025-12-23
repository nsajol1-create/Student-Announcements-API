<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Announcements API</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page d-flex flex-column min-vh-100">

<!-- ================= HEADER ================= -->
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl d-flex align-items-center">

        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center" style="margin-right:0;"></a>

        <!-- Centered Navigation -->
        <nav id="navmenu" class="navmenu mx-auto">
            <ul class="d-flex gap-4 list-unstyled mb-0">
                <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li><a href="{{ route('admin.announcements.creates') }}">Create Announcement</a></li>
                <li><a href="{{ route('admin.announcements.show') }}"class="active">Show Announcement</a></li>
                <li><a href="{{ route('admin.developers.dev') }}">Developers</a></li>
                <li><a href="{{ route('admin.contactus') }}">Contact</a></li>
            </ul>
        </nav>

        <!-- Logout -->
        <form method="POST" action="{{ route('choices') }}" class="m-0">
            @csrf
            <button
                type="submit"
                onclick="return confirm('Are you sure you want to log out?')"
                style="background:none;border:none;font-weight:600;color:#fff;cursor:pointer;">
                Logout
            </button>
        </form>

    </div>
</header>

<!-- ================= MAIN CONTENT ================= -->
<main class="grow container my-4">
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<footer id="footer" class="footer accent-background mt-auto py-3">
    <div class="container text-center">
        <p class="mb-1">© <span>Copyright</span> <span>All Rights Reserved</span></p>
        <div class="credits">
            Designed by <a>Group 2</a>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
