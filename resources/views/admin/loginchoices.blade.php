<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Student Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f8f9fa, #eef1f5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        .login-container {
            max-width: 900px;
            width: 100%;
        }

        .login-title {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-title h2 {
            font-weight: 700;
            color: #343a40;
        }

        .login-title p {
            color: #6c757d;
        }

        .login-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .login-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2.5rem;
            color: #fff;
        }

        .admin-icon {
            background: linear-gradient(135deg, #0d6efd, #084298);
        }

        .student-icon {
            background: linear-gradient(135deg, #198754, #0f5132);
        }

        .btn-login {
            padding: 0.6rem 1.5rem;
            border-radius: 30px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-title">
        <h2>Student Management System</h2>
        <p>Select how you want to log in</p>
    </div>

    <div class="row g-4">
        <!-- Admin Login -->
        <div class="col-md-6">
            <div class="card login-card text-center p-4">
                <div class="icon-circle admin-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h4 class="fw-bold mt-2">Administrator</h4>
                <p class="text-muted mb-4">
                    Manage students, courses, and system records.
                </p>
                <a href="{{ route('admin.login') }}" class="btn btn-primary btn-login">
                    Login as Admin
                </a>
            </div>
        </div>

        <!-- Student Login -->
        <div class="col-md-6">
            <div class="card login-card text-center p-4">
                <div class="icon-circle student-icon">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h4 class="fw-bold mt-2">Student</h4>
                <p class="text-muted mb-4">
                    View your enrollment status and personal information.
                </p>
                <a href="{{ route('student') }}" class="btn btn-success btn-login">
                    Login as Student
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
