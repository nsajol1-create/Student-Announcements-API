<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Student Announcements API</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <!-- Logo -->
            <a href="index.html" class="logo d-flex align-items-center"></a>

            <!-- Navigation -->
            <nav id="navmenu" class="navmenu">
                <ul class="d-flex gap-3 m-0 p-0 list-unstyled">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><a href="{{ route('admin.announcements.creates') }}">Announcement</a></li>
                    <li><a href="{{ route('admin.announcements.show') }}">Show Announcement</a></li>
                    <li><a href="{{ route('admin.developers.dev') }}">Developers</a></li>
                    <li><a href="{{ route('admin.contactus') }}" class="active">Contact</a></li>
                </ul>
            </nav>

            <!-- Logout -->
            <a href="{{ route('choices') }}" onclick="return confirm('Are you sure you want to log out?')"
               class="fw-bold text-white text-decoration-none"
               onmouseover="this.style.color='#e0e0e0'" onmouseout="this.style.color='#ffffff'">
                Logout
            </a>

        </div>
    </header>

    <div class="container my-4">
        <h1 class="mb-3 text-center">Contact Us</h1>
        <p class="text-center">For inquiries and assistance, feel free to reach out to our event coordinators.
            We are here to help and provide any information you may need.</p>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5 text-center text-lg-start">
                <div class="col-lg-4">
                    <div class="contact-info-box p-3 border rounded shadow-sm h-100">
                        <div class="icon-box mb-2"><i class="bi bi-geo-alt fs-3"></i></div>
                        <h4>Our Address</h4>
                        <p>Narciso Street, Surigao, 8400 Surigao del Norte</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info-box p-3 border rounded shadow-sm h-100">
                        <div class="icon-box mb-2"><i class="bi bi-envelope fs-3"></i></div>
                        <h4>Email Address</h4>
                        <p>superman@example.com</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info-box p-3 border rounded shadow-sm h-100">
                        <div class="icon-box mb-2"><i class="bi bi-headset fs-3"></i></div>
                        <h4>Hours of Operation</h4>
                        <p>Monday-Fri: 8 AM - 5 PM</p>
                        <p>Saturday: 8 AM - 11 AM</p>
                    </div>
                </div>
            </div>

            <!-- Google Map + Contact Form -->
            <div class="row gy-4">
                <!-- Map -->
                <div class="col-lg-6">
                    <div class="map-section rounded overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.54203250581395!2d125.49433053563419!3d9.787518913050379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x330137d56c4f8f45%3A0x19836c21649d4301!2sSurigao%20del%20Norte%20State%20University%20-%20Main%20Campus!5e0!3m2!1sen!2sph!4v1765186584357!5m2!1sen!2sph"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-wrapper p-4 border rounded shadow-sm">
                        <h2 class="text-center mb-4">Get in Touch</h2>
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <i class="bi bi-person position-absolute top-50 translate-middle-y ms-3"></i>
                                        <input type="text" class="form-control ps-5" name="name" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <i class="bi bi-envelope position-absolute top-50 translate-middle-y ms-3"></i>
                                        <input type="email" class="form-control ps-5" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <i class="bi bi-text-left position-absolute top-50 translate-middle-y ms-3"></i>
                                        <input type="text" class="form-control ps-5" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <i class="bi bi-chat-dots message-icon position-absolute top-0 ms-3 mt-2"></i>
                                        <textarea class="form-control ps-5 pt-4" name="message" placeholder="Write Message..." style="height: 180px" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary w-50 mt-2">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer accent-background mt-5">
        <div class="container text-center"><br><br>
            <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
            <div class="credits">Designed by <a>Group 2</a></div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
