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
                    <li><a href="{{ route('studentHome') }}" class="active">Home</a></li>
                    <li><a href="{{ route('studentAnnounce') }}">Show Announcement</a></li>
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


        <!-- Courses Hero Section -->
        <section id="courses-hero" class="courses-hero section light-background">

            <div class="hero-content">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="hero-text">
                                <h1>Student Announcements API</h1>
                                <p>A smart and reliable backend system built to keep students informed and engaged,
                                    enabling administrators to publish announcements effortlessly while delivering
                                    timely updates to applications in real time—so no important message goes unnoticed.
                                </p>

                                <div class="hero-stats">
                                    <div class="stat-item">
                                        <span class="number purecounter" data-purecounter-start="0"
                                            data-purecounter-end="22" data-purecounter-duration="2"></span>
                                        <span class="label">Students Enrolled</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="number purecounter" data-purecounter-start="0"
                                            data-purecounter-end="100" data-purecounter-duration="2"></span>
                                        <span class="label">Success Rate %</span>
                                    </div>
                                </div>

                                <div class="hero-buttons">
                                    <a href="#courses" class="btn btn-primary">Browse Courses</a>
                                    <a href="#about" class="btn btn-outline">Learn More</a>
                                </div>

                                <div class="hero-features">
                                    <div class="feature">
                                        <i class="bi bi-shield-check"></i>
                                        <span>Certified Programs</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-clock"></i>
                                        <span>Lifetime Access</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-people"></i>
                                        <span>Expert Instructors</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="hero-image">
                                <div class="main-image">
                                    <img src="{{ asset('assets/img/person/aubrey.jpg') }}" alt="Online Learning"
                                        class="img-fluid">

                                </div>

                                <div class="floating-cards">

                                    <div class="course-card" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card-content">
                                            <h6 class="text-center">FINAL PROJECT</h6>
                                            <span></span>
                                        </div>
                                    </div>

                                    <div class="course-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card-icon">
                                            <i class="bi bi-person-video3"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6>ITE - 315</h6>
                                            <span>GROUP 3</span>
                                        </div>
                                    </div>

                                    <div class="course-card" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="card-content">
                                            <h6>BSICT - 3B2</h6>
                                            <span>22 Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-background">
                <div class="bg-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
            </div>

        </section><!-- /Courses Hero Section -->

        <!-- Featured Courses Section -->
        <section id="featured-courses" class="featured-courses section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Exam Schedule</h2>
                <p>Starting from December 15, 2025 to December 20, 2025</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/laravel2.png') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">FINAL EXAM</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Advanced</span>
                                    <span class="duration">1 Hour</span>
                                </div>
                                <div class="course-info">
                                    <h3><a href="#">Integrative Programming & Tech. 2</a></h3>
                                    <p><strong>CLASSROOM:</strong> EB 206 |
                                        <strong>SCHEDULE:</strong> December 15, 2025 |
                                        <strong>TIME:</strong> 1:00PM - 2:00PM
                                    </p>
                                </div>

                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img img-fluid">
                                    <div class="instructor-info">
                                        <h6>Engr. Nimrod G. Becerro</h6>
                                        <span>ICT Director/Instructor</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/web.jpg') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">FINAL EXAM</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Intermediate</span>
                                    <span class="duration">1 Hour</span>
                                </div>
                                <h3><a href="#">Web Development</a></h3>
                                <p><strong>CLASSROOM:</strong> EB 207 |
                                    <strong>SCHEDULE:</strong> December 16, 2025 |
                                    <strong>TIME:</strong> 11:00AM - 12:00NN
                                </p>
                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img">
                                    <div class="instructor-info">
                                        <h6>Engr. Ralph C. Cabañero </h6>
                                        <span>Instructor/ICTFaculty</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/database.jpg') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">FINAL EXAM</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Advanced</span>
                                    <span class="duration">1 Hour & 30 Minutes</span>
                                </div>
                                <h3><a href="#">Advanced Database System</a></h3>
                                <p><strong>CLASSROOM:</strong> EB 207 |
                                    <strong>SCHEDULE:</strong> December 15, 2025 |
                                    <strong>TIME:</strong> 5:30PM - 7:00PM
                                </p>
                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img">
                                    <div class="instructor-info">
                                        <h6>Engr. Abdul A. Pangandaman </h6>
                                        <span>Instructor/ICT Faculty</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/networking.jpg') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">MIDTERM & FINAL EXAM</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Advanced</span>
                                    <span class="duration">1 Hour & 30 Minutes</span>
                                </div>
                                <h3><a href="#">Networking 2</a></h3>
                                <p><strong>CLASSROOM:</strong> EB 312 |
                                    <strong>SCHEDULE:</strong> December 18, 2025 |
                                    <strong>TIME:</strong> 8:00AM - 9:30PAM
                                </p>
                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img">
                                    <div class="instructor-info">
                                        <h6>Engr. Pip R. Ruaya </h6>
                                        <span>Instructor/ICT Faculty</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/godot.png') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">Final Exam</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Intermediate</span>
                                    <span class="duration">1 Hour & 30 Minutes</span>
                                </div>
                                <h3><a href="#">Multimedia Animation & Game Dev</a></h3>
                                <p><strong>CLASSROOM:</strong> EB 312 |
                                    <strong>SCHEDULE:</strong> December 19, 2025 |
                                    <strong>TIME:</strong> 7:00PM - 8:30PM
                                </p>
                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img">
                                    <div class="instructor-info">
                                        <h6>Engr. Abdul A. Pangandaman</h6>
                                        <span>Instructor/ICT Faculty</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="course-card">
                            <div class="course-image">
                                <img src="{{ asset('assets/img/person/laravel11.avif') }}" alt="Course"
                                    class="img-fluid">
                                <div class="badge featured">Final Exam</div>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="level">Intermediate</span>
                                    <span class="duration">2 Hours & 30 Minutes</span>
                                </div>
                                <h3><a href="#">System Integration & Arch. 1</a></h3>
                                <p><strong>CLASSROOM:</strong> EB 206 |
                                    <strong>SCHEDULE:</strong> December 17, 2025 |
                                    <strong>TIME:</strong> 9:30PM - 12:00NN
                                </p>
                                <div class="instructor">
                                    <img src="{{ asset('assets/instructor1.png') }}" alt="Instructor"
                                        class="instructor-img">
                                    <div class="instructor-info">
                                        <h6>Engr. Ghandi Galila</h6>
                                        <span>Instructor/ICT Faculty</span>
                                    </div>
                                </div>
                                <div class="course-stats">
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="students">
                                        <i class="bi bi-people-fill"></i>
                                        <span>22 students</span>
                                    </div>
                                </div>
                                <a href="#" class="btn-course">Take Exam</a>
                            </div>
                        </div>
                    </div><!-- End Course Item -->

                </div>

            </div>

        </section><!-- /Featured Courses Section -->

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
