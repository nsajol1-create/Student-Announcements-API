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
                    <li><a href="{{ route('studentAnnounce') }}">Show Announcement</a></li>
                    <li><a href="{{ route('studentDevelopers') }}"  class="active">Developers</a></li>
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

        <!-- Featured Instructors Section -->
        <section id="featured-instructors" class="featured-instructors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Meet the Developers</h2>
                <p>A 3rd-year students from section BSICT-3B2 who is working on this project.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <<div class="container" data-aos="fade-up">

                    <!-- Row 1: First 3 instructors -->
                    <div class="row gy-8">
                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                            <!-- Card 1: Aubrey -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/aubreyyy.webp') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>4.8</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>Aubrey Siega</h5>
                                    <p class="specialty">FRONT-END DEVELOPER</p>
                                    <p class="description">Learning never stops, even outside the classroom.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/jhhjjjjjjjjjjjjjjjkjj" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="250">
                            <!-- Card 2: PJ -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/pj.jpeg') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>4.9</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>PJ Lapining</h5>
                                    <p class="specialty">Front-end Developer</p>
                                    <p class="description">Code today, innovate tomorrow.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/pjlapiningroamer" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-github"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="300">
                            <!-- Card 3: Kane -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/kahimos.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                            <span>4.6</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>Kane Sajol</h5>
                                    <p class="specialty">Back-end Developer</p>
                                    <p class="description">Turning ideas into reality, one line of code at a time.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/kaanneeee" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-dribbble"></i></a>
                                            <a href="#"><i class="bi bi-behance"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Next 3 instructors -->
                    <div class="row gy-8 mt-4">
                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="350">
                            <!-- Card 4: Jia -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/jia.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>4.7</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>Jia Mae Cagas</h5>
                                    <p class="specialty">Database Developer</p>
                                    <p class="description">Challenges are just opportunities in disguise.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/jiamae.cagas.7" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                            <!-- Card 5: Jhonwell -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/john.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                            <span>4.7</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>Jhonwell Biñas</h5>
                                    <p class="specialty">Database Developer</p>
                                    <p class="description">Stay curious, stay creative, stay coding.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/chimmy.92317" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="450">
                            <!-- Card 6: John Lionell -->
                            <div class="instructor-card">
                                <div class="instructor-image">
                                    <img src="{{ asset('assets/img/person/totoy.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="overlay-content">
                                        <div class="rating-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>4.9</span>
                                        </div>
                                        <div class="course-count">
                                            <i class="bi bi-play-circle"></i>
                                            <span>STUDENT</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-info">
                                    <h5>John Lionell Avenilla</h5>
                                    <p class="specialty">Back-end Developer</p>
                                    <p class="description">Building skills, shaping the future. Code today, innovate
                                        tomorrow.</p>
                                    <div class="action-buttons">
                                        <a href="https://www.facebook.com/johnlionell.avenilla.1" target="_blank"
                                            rel="noopener noreferrer" class="btn-view">View Profile</a>
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-github"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Row 2 -->

            </div> <!-- End Container -->


            </div>

            </div>

        </section><!-- /Featured Instructors Section -->



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
