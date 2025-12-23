<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Announcements API    </title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <!-- Logo -->
            <a href="index.html" class="logo d-flex align-items-center" style="margin-right:0;"></a>

            <!-- Centered Navigation -->
            <nav id="navmenu" class="navmenu" style="margin: 0 auto;">
                <ul style="list-style:none; display:flex; gap:30px; margin:0; padding:0;">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><a href="{{ route('admin.announcements.creates') }}" class="active">Create Announcement</a></li>
                    <li><a href="{{ route('admin.announcements.show') }}">Show Announcement</a></li>
                    <li><a href="{{ route('admin.developers.dev') }}">Developers</a></li>
                    <li><a href="{{ route('admin.contactus') }}">Contact</a></li>
                </ul>
            </nav>

            <!-- Logout -->
            <a href="{{ route('choices') }}" onclick="return confirm('Are you sure you want to log out?')"
               style="font-weight: 600; color: #ffffff; text-decoration: none; cursor: pointer;"
               onmouseover="this.style.color='#e0e0e0'" onmouseout="this.style.color='#ffffff'">
                Logout
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="grow container my-4">

        <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary mb-3">+ New Announcement</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>File</th>
                <th>Actions</th>
            </tr>

            @foreach($announcements as $a)
                <tr>
                    <td>{{ $a->title }}</td>
                    <td>
                        @if($a->is_archived)
                            <span class="badge bg-secondary">Archived</span>
                        @else
                            <span class="badge bg-success">Active</span>
                        @endif
                    </td>
                    <td>
                        @if($a->file)
                            <a href="{{ asset('storage/'.$a->file) }}" target="_blank">View</a>
                        @endif
                    </td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('admin.announcements.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Delete Form -->
                        <form method="POST" action="{{ route('admin.announcements.destroy', $a->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

    <!-- Footer -->
    <footer id="footer" class="footer accent-background mt-auto py-3">
        <div class="container text-center">
            <p>© <span>Copyright</span> <span>All Rights Reserved</span></p>
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
