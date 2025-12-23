<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Student Announcements API</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">




    <!-- =======================================================
  * Template Name: Learner
  * Template URL: https://bootstrapmade.com/learner-bootstrap-course-template/
  * Updated: Jul 08 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <!-- Logo -->
            <a href="index.html" class="logo d-flex align-items-center" style="margin-right:0;">
                <!-- logo here -->
            </a>

            <!-- Centered Navigation -->
            <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
                <ul style="list-style:none; display:flex; gap:30px; margin:0; padding:0;">
                    <li><a href="{{ route('studentHome') }}">Home</a></li>
                    <li><a href="{{ route('studentAnnounce') }}" class="active">Show Announcement</a></li>
                    <li><a href="{{ route('studentDevelopers') }}">Developers</a></li>
                    <li><a href="{{ route('studentContact') }}">Contact</a></li>
                </ul>
            </nav>

            <!-- Logout (same style as nav links) -->
            <a href="{{ route('choices') }}" onclick="return confirm('Are you sure you want to log out?')"
                style="
        font-weight: 600;
        ccolor: #ffffff;
        text-decoration: none;
        cursor: pointer;
      "
                onmouseover="this.style.color='#e0e0e0'" onmouseout="this.style.color='#ffffff'">
                Logout
            </a>

        </div>
    </header>

    <main class="main">

        <div class="container my-4">
    <div class="container my-4">
    <div class="text-center mb-4">
        <h3 class="fw-bold display-6">
            <i class="bi bi-megaphone-fill"></i> All Announcements
        </h3>
        <p class="text-muted">View all student announcements easily.</p>
    </div>
</div>


    <div class="row g-4">
        @foreach($announcements as $announcement)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Title: </strong>{{ $announcement->title }}</h5>
                        <p class="card-text"><strong>Content: </strong>{{ $announcement->content }}</p>

                        <ul class="list-group list-group-flush mb-2">
                            <li class="list-group-item"><strong>ID:</strong> {{ $announcement->id }}</li>
                            <li class="list-group-item"><strong>Status:</strong>
                                @if($announcement->is_archived)
                                    <span class="badge bg-secondary">Archived</span>
                                @else
                                    <span class="badge bg-success">Active</span>
                                @endif
                            </li>
                            <li class="list-group-item"><strong>File:</strong>
                                @if($announcement->file)
                                    <a href="{{ asset('storage/'.$announcement->file) }}" target="_blank">View</a>
                                @endif
                            </li>
                            <li class="list-group-item"><strong>Created At:</strong> {{ $announcement->created_at }}</li>
                            <li class="list-group-item"><strong>Updated At:</strong> {{ $announcement->updated_at }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>










        <footer id="footer" class="footer accent-background">
            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a>Group 2</a>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>


        <!-- Main JS File -->
        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
