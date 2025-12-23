<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Brain Login 4 CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-4/assets/css/login-4.css">
</head>
<body>

<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="card border-light-subtle shadow-sm">
            <div class="row g-0">

                <!-- LEFT IMAGE -->
                <div class="col-12 col-md-6">
                    <img
                        class="img-fluid rounded-start w-100 h-100 object-fit-cover"
                        loading="lazy"
                        src="{{ asset('assets/snsulogo.jpg') }}"
                        alt="Login Image"
                    >
                </div>

                <!-- RIGHT FORM -->
                <div class="col-12 col-md-6">
                    <div class="card-body p-3 p-md-4 p-xl-5">

                        <div class="mb-4">
                            <h3>Admin Login</h3>
                        </div>

                        <!-- 🔐 Laravel Login Form -->
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf

                            <div class="row gy-3 gy-md-4 overflow-hidden">

                                <!-- EMAIL -->
                                <div class="col-12">
                                    <label for="email" class="form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="{{ old('email') }}"
                                        placeholder="name@example.com"
                                        required
                                    >
                                </div>

                                <!-- PASSWORD -->
                                <div class="col-12">
                                    <label for="password" class="form-label">
                                        Password <span class="text-danger">*</span>
                                    </label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        required
                                    >
                                </div>

                                <!-- REMEMBER ME -->
                                <div class="col-12">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="remember"
                                            id="remember_me"
                                        >
                                        <label class="form-check-label text-secondary" for="remember_me">
                                            Keep me logged in
                                        </label>
                                    </div>
                                </div>

                                <!-- ERRORS -->
                                @if ($errors->any())
                                    <div class="col-12">
                                        <div class="alert alert-danger">
                                            {{ $errors->first() }}
                                        </div>
                                    </div>
                                @endif

                                <!-- SUBMIT -->
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl btn-primary" type="submit">
                                            Log in now
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <!-- LINKS -->
                        <hr class="mt-5 mb-4 border-secondary-subtle">

                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                            <a href="#" class="link-secondary text-decoration-none">
                                Create new account
                            </a>
                            <a href="#" class="link-secondary text-decoration-none">
                                Forgot password
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

</body>
</html>
